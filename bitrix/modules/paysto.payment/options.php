<?php
include_once(dirname(__FILE__) . '/include.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/paysto.payment/prolog.php');
$aTabs = array(
	array('DIV' => 'fedit1', 'TAB' => GetMessage('PAYSTO.PAYMENT_BTN_HELP'), 'ICON' => '', 'TITLE' => GetMessage('PAYSTO.PAYMENT_BTN_HELP')),
);
$tabControl = new CAdminTabControl('tabControl', $aTabs);
$tabControl->Begin();
$tabControl->BeginNextTab();

?>
<tr>
	<td colspan="2">
		<?= GetMessage('PAYSTO.PAYMENT_HELP_TEXT') ?>
	</td>
</tr>
<?php

$tabControl->EndTab();
$tabControl->End();
