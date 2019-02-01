<?php
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();
$paysto_sale_default_option = array(
    'x_description' => 'Заказ в магазине ',
    "x_login" => "",
    "x_secret" => "",
    "x_currency_code" => "RUB",
    'x_relay_response' => "TRUE",
    'x_relay_url' => 'http'.(isset($_SERVER['HTTPS']) ? 's':'').'://'.$_SERVER['HTTP_HOST'].'/personal/order/detail/',
);