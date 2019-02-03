<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/paysto.payment/prolog.php');

/**
 * Install and Deinstall paysto.payment
 *
 */
class paysto_payment extends CModule {	// Required vars
	
	var $PARTNER_NAME;
	var $PARTNER_URI;
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $aPaths; // Array of paths for install
	var $MODULE_ID = 'paysto.payment';

	/**
	 * Constructor
	 */
	function __construct() {
		$this->PARTNER_NAME = 'PaySto';
		$this->PARTNER_URI = 'https://paysto.ru';

		include(dirname(__FILE__).'/version.php');

		$this->MODULE_VERSION = $arModuleVersion['VERSION'];
		$this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
		$this->MODULE_NAME = GetMessage('PAYSTO.PAYMENT_INSTALL_NAME');
		if (CModule::IncludeModule($this->MODULE_ID)) {
			$this->MODULE_DESCRIPTION = GetMessage('PAYSTO.PAYMENT_INSTALL_DESCRIPTION');
		} else {
			$this->MODULE_DESCRIPTION = GetMessage('PAYSTO.PAYMENT_PREINSTALL_DESCRIPTION');
		}
		$this->aPaths = array(
			'bitrix' => '/bitrix',
			'paysto' => '/paysto',
		);
	}

	function DoInstall() {
		global $APPLICATION, $DB;

		$GLOBALS['errors'] = false;
		$this->errors = false;
		// copy files
		if (!CModule::IncludeModule($this->MODULE_ID)) {
			$this->InstallFiles();
			RegisterModule($this->MODULE_ID);
		}

		$GLOBALS['errors'] = $this->errors;
		$APPLICATION->IncludeAdminFile(
			GetMessage('PAYSTO.PAYMENT_INSTALL_TITLE'),
			$_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/paysto.payment/install/step_ok.php'
			);
	}

	function DoUninstall() {
		global $APPLICATION, $uninstall;

		if (isset($uninstall) && $uninstall == 'Y' && CModule::IncludeModule($this->MODULE_ID)) {
			$this->UnInstallFiles();
			UnRegisterModule($this->MODULE_ID);
		} 
		else {
			$APPLICATION->IncludeAdminFile(
				GetMessage('PAYSTO.PAYMENT_INSTALL_TITLE'),
				$_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/paysto.payment/install/unstep_ok.php'
				);
		}
	}

	/**
	 * Copy files
	 * @return boolean
	 */
	function InstallFiles() {
		$path_from = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/paysto.payment/install/www';
		$path_to = $_SERVER['DOCUMENT_ROOT'];
		foreach ($this->aPaths as $name_from => $name_to) {
			if (!CopyDirFiles($path_from . $this->aPaths[$name_from], $path_to . $this->aPaths[$name_from], true, true, false, '.svn')) {
				$this->errors = array(GetMessage('PAYSTO.PAYMENT_INSTALL_ERROR'));
			}
		}

                // install reports
		$path_from = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/paysto.payment/install/reports';
		$path_to = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin/reports';
		foreach ($this->aPaths as $name_from => $name_to) {
			if (!CopyDirFiles($path_from . $this->aPaths[$name_from], $path_to . $this->aPaths[$name_from], true, true, false, '.svn')) {
				// $this->errors = array(GetMessage('PAYSTO.PAYMENT_INSTALL_ERROR'));
			}
		}

		return true;
	}

	/**
	 * Delete files
	 * @return boolean
	 */
	function UnInstallFiles() {
		$path_from = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/paysto.payment/install/www';
		$path_to = $_SERVER['DOCUMENT_ROOT'];
		
		DeleteDirFilesEx('/paysto');
		DeleteDirFilesEx('/bitrix/php_interface/include/sale_payment/paysto.payment');

                DeleteDirFiles($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/paysto.payment/install/reports',
                               $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin/reports');

		return true;
	}

}
