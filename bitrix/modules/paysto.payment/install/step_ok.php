<?php
/**
 * Resultinstall page
 */
if (!check_bitrix_sessid()) {
	return;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/paysto.payment/prolog.php');

global $errors;

if ($errors === false || !CModule::IncludeModule('paysto.payment')) {
	echo CAdminMessage::ShowNote(GetMessage('PAYSTO.PAYMENT_INSTALL_MESSAGE'));
} else {
	for ($i = 0; $i < count($errors); $i++) {
		$alErrors .= $errors[$i] . '<br>';
	}
	echo CAdminMessage::ShowMessage(Array('TYPE' => 'ERROR', 'MESSAGE' => GetMessage('MOD_INST_ERR'), 'DETAILS' => $alErrors, 'HTML' => true));
};

?>
<form action="<?= $APPLICATION->GetCurPage() ?>">
	<input type="hidden" name="lang" value="<?= LANG ?>">
	<input type="submit" name="" value="<?= GetMessage('MOD_BACK') ?>">
<?php if ($errors === false): ?>
	<input type="button" onclick="document.location='/bitrix/admin/settings.php?lang=<?= LANGUAGE_ID ?>&mid_menu=1&mid=paysto.payment'" value="<?= GetMessage('PAYSTO.PAYMENT_BTN_HELP')?>">
<?php endif; ?>
</form>