<?php
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();
$payanyway_sale_default_option = array(
    "PAW_TEST" => "0",
    "PAW_DEMO" => "0",
    "ACCOUNT_ID" => "",
    "ACCOUNT_CODE" => "",
    "SUCCESS_URL" => 'http'.(isset($_SERVER['HTTPS']) ? 's':'').'://'.$_SERVER['HTTP_HOST'].'/personal/order/detail/',
    "FAIL_URL" => 'http'.(isset($_SERVER['HTTPS']) ? 's':'').'://'.$_SERVER['HTTP_HOST'].'/personal/order/detail/',
    "TEXT_INSTEAD_BUTTON" => '����� ��������� ������� ������ �� �������� ��� ������ �� ������',
    "FAIL_SEND_PAYLINK" => '� ������ ������������ ������ �� ������ ��������� ������, ��������� � ���� ��� ��������� ������',
    "PAID_STATUS" => 'P',
);