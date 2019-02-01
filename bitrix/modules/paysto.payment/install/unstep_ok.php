<?php
/**
 * Page of uninstall options
 */
if (!check_bitrix_sessid()) {
	return;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/paysto.payment/prolog.php');

?>
<form action="<?= $APPLICATION->GetCurPage() ?>">
<?= bitrix_sessid_post() ?>
	<input type="hidden" name="lang" value="<?= LANGUAGE_ID ?>">
	<input type="hidden" name="id" value="paysto.payment">
	<input type="hidden" name="uninstall" value="Y">
	<?= CAdminMessage::ShowMessage(GetMessage('MOD_UNINST_WARN')) ?>
	<p><input type="checkbox" name="savedata" id="savedata" value="Y" checked><label for="savedata"><?= GetMessage('PAYSTO.PAYMENT_SAVE_TABLES') ?></label></p>
	<input type="submit" name="inst" value="<?= GetMessage('MOD_UNINST_DEL') ?>">
	<input type="button" onclick="document.location='/bitrix/admin/module_admin.php?lang=<?= LANGUAGE_ID ?>'" value="<?= GetMessage('PAYSTO.PAYMENT_BTN_CANCEL') ?>">
</form>
