<?php
/**
 * Options PaySto module
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	exit();
}
include(GetLangFileName(dirname(__FILE__) . '/', '/paysto.php'));

$psTitle = 'PaySto';
$psDescription = GetMessage('SALE_PAYSTO_DESCRIPTION');

$statuses = CSaleStatus::GetList();
$statuses_select = array();
while ($s = $statuses->Fetch()) {
	$statuses_select[$s['ID']] = array(
		'NAME' => $s['NAME'],
		'VALUE' => $s['ID'],
	);
}

$taxes = array(
	'N' => array('NAME' => GetMessage('SALE_PAYSTO_TAX_NONE')),
	'Y' => array('NAME' => GetMessage('SALE_PAYSTO_TAX')),
);

$arPSCorrespondence = array(
	'X_LOGIN' => array(
		'NAME' => GetMessage('SALE_PAYSTO_X_LOGIN'),
		'DESCR' => GetMessage('SALE_PAYSTO_X_LOGIN_DESC'),
		'VALUE' => '',
		'TYPE' => '',
		'GROUP' => GetMessage('SALE_PAYSTO_G_MAIN'),
		'DEFAULT' => '',
		'SORT' => '1',
	),
	'SECRET' => array(
		'NAME' => GetMessage('SALE_PAYSTO_SECRET'),
		'DESCR' => GetMessage('SALE_PAYSTO_SECRET_DESC'),
		'VALUE' => '',
		'TYPE' => 'PASSWORD',
		'GROUP' => GetMessage('SALE_PAYSTO_G_MAIN'),
		'DEFAULT' => '',
		'SORT' => '2',
	),
    'DESC' => array(
        'NAME' => GetMessage('SALE_PAYSTO_DESC'),
        'DESCR' => GetMessage('SALE_PAYSTO_DESC_DESC'),
        'VALUE' => '',
        'TYPE' => 'PASSWORD',
        'GROUP' => GetMessage('SALE_PAYSTO_G_MAIN'),
        'DEFAULT' => '',
        'SORT' => '3',
    ),
	'PAID_STATUS' => array(
		'NAME' => GetMessage('SALE_PAYSTO_PAID_STATUS'),
		'DESCR' => GetMessage('SALE_PAYSTO_PAID_STATUS_DESC'),
		'VALUE' => $statuses_select,
		'TYPE' => 'SELECT',
		'GROUP' => GetMessage('SALE_PAYSTO_G_STATUSES'),
		'DEFAULT' => '',
		'SORT' => '4',
	),
	'SHIPPING_TAX' => array(
		'NAME' => GetMessage('SALE_PAYSTO_SHIPPING_TAX'),
		'DESCR' => '',
		'VALUE' => $taxes,
		'TYPE' => 'SELECT',
		'GROUP' => GetMessage('SALE_PAYSTO_G_CASHBOX'),
		'DEFAULT' => '',
		'SORT' => '5',
	),
	'ONLY_FROM_IPS' => array(
		'NAME' => GetMessage('SALE_PAYSTO_ONLY_FROM_IPS'),
		'DESCR' => GetMessage('SALE_PAYSTO_ONLY_FROM_IPS_DESC'),
		'VALUE' => array(
			'0' => array(
				'NAME' => GetMessage('SALE_PAYSTO_NO'),
				'VALUE' => '0',
				),
			'1' => array(
				'NAME' => GetMessage('SALE_PAYSTO_YES'),
				'VALUE' => '1',
				),
		),
		'TYPE' => 'SELECT',
		'GROUP' => GetMessage('SALE_PAYSTO_G_SEND'),
		'DEFAULT' => '1',
		'SORT' => '8',
	)
);