<?php
/**
 * Notification PaySto v1.0.0
 */
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);

CModule::IncludeModule("sale");
CModule::IncludeModule("paysto.payment");

/**
 * Redirect to orders page with message
 * @param $message
 * @param string $type
 */
function redirectToOrdersPage($message='', $type = 'OK')
{
    ShowMessage(array("TYPE" => $type, "MESSAGE" => $message));
    $x_relay_url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . '/personal/order/detail/';
    LocalRedirect($x_relay_url);
}

/**
 * Return sign with MD5 algoritm
 * @param $x_login
 * @param $x_trans_id
 * @param $x_amount
 * @return string
 */
function get_x_MD5_Hash($x_login, $x_trans_id, $x_amount, $secret)
{
    return md5($secret . $x_login . $x_trans_id . $x_amount);
}

/**
 * Check if IP in acceptable IPS list
 * @return bool
 */
function checkInServerList()
{
    $serverList = array(
        '95.213.209.218',
        '95.213.209.219',
        '95.213.209.220',
        '95.213.209.221',
        '95.213.209.222',
    );
    $myIP = array();
    $myIP[] = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : '127.0.0.1';
    $myIP[] = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : '127.0.0.1';
    $myIP[] = isset($_SERVER['HTTP_X_REAL_IP']) ? $_SERVER['HTTP_X_REAL_IP'] : '127.0.0.1';
    $myIP[] = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1';
    $myIP[] = isset($_SERVER['GEOIP_ADDR']) ? $_SERVER['GEOIP_ADDR'] : '127.0.0.1';
    if (empty(array_intersect($serverList, $myIP))) {
        return false;
    } else {
        return true;
    }
}

/**
 * Get variables from post or get request
 * @param $name
 * @return null
 */
function getRequestedVariable($name)
{
    $result = null;
    if (isset($_GET[$name])) {
        $result = $_GET[$name];
    } elseif (isset($_POST[$name])) {
        $result = $_POST[$name];
    }
    return $result;
}

/**
 * Logger function for debug
 * @param  [type] $var  [description]
 * @param  string $text [description]
 * @return [type]       [description]
 */
function logger($var, $text = '')
{
    // Название файла
    $loggerFile = __DIR__ . '/logger.log';
    if (is_object($var) || is_array($var)) {
        $var = (string)print_r($var, true);
    } else {
        $var = (string)$var;
    }
    $string = date("Y-m-d H:i:s") . " - " . $text . ' - ' . $var . "\n";
    file_put_contents($loggerFile, $string, FILE_APPEND);
}

$dbPayList = CSalePaySystemAction::GetList(array(), array(), false, false, array('ID', 'ACTION_FILE', 'PARAMS', 'ENCODING'));
$paysystem_id = null;
while ($arPaysystem = $dbPayList->Fetch()) {
    if (strpos($arPaysystem['ACTION_FILE'], 'paysto.payment') !== false) {
        $paysystem_id = $arPaysystem['ID'];
        $paysystem_params = unserialize($arPaysystem['PARAMS']);
        break;
    }
}


if (!is_null($paysystem_id)) {
    // workflow variables
    $error = '';
    $useSeparatePay = false;
    $order = null;
    $orderId = null;
    $arOrder = null;
    $order_id = null;

    // Paysto settings
    $x_login = $paysystem_params['X_LOGIN']['VALUE'];
    $secret = $paysystem_params['SECRET']['VALUE'];
    $only_from_ips = $paysystem_params['ONLY_FROM_IPS']['VALUE'];
    $x_response_code = getRequestedVariable('x_response_code');
    $x_trans_id = getRequestedVariable('x_trans_id');
    $x_invoice_num = getRequestedVariable('x_invoice_num');
    $x_MD5_Hash = getRequestedVariable('x_MD5_Hash');
    $x_amount = getRequestedVariable('x_amount');
    $order_id = getRequestedVariable('x_invoice_num');

    // Get order
    $arOrder = CSaleOrder::GetByID($x_invoice_num);
    $amount = number_format($arOrder['PRICE'], 2, '.', '');

    // Get generated md5 hash
    $generetad_x_MD5_Hash = get_x_MD5_Hash($x_login, $x_trans_id, $amount, $secret);

    // Check if order is paid
    $is_paid = ($arOrder['PAYED'] == 'Y');

    // Check IP
    if (!$is_paid && $only_from_ips && !checkInServerList()) {
        redirectToOrdersPage("Error: order is not paid", 'ERROR');
    } else {
        if (!$is_paid) {
            if ($x_response_code == 1) {
                if ($x_MD5_Hash == $generetad_x_MD5_Hash) {
                    if (!CSaleOrder::PayOrder($order_id, "Y")) {
                        $error .= ' Set paid flag error; ';
                    }
                    $arFields = array("STATUS_ID" => "P");
                    $arFields["COMMENTS"] = $arOrder['COMMENTS'] . "\n Сумма " . $MNT_AMOUNT . ' поступила в счет оплаты заказа';
                    if (isset($paysystem_params['PAID_STATUS'], $paysystem_params['PAID_STATUS']['VALUE']) && $paysystem_params['PAID_STATUS']['VALUE']) {
                        $arFields['STATUS_ID'] = $paysystem_params['PAID_STATUS']['VALUE'];
                    }
                    if (!CSaleOrder::Update($order_id, $arFields)) {
                        $error .= ' Update paid order error ';
                    }
                    if ($error) {
                        redirectToOrdersPage($error, 'ERROR');
                    } else {
                        redirectToOrdersPage("Спасибо за заказ", 'OK');
                    }
                } else {
                    $error .= 'FAIL#signature_is_incorrect';
                    redirectToOrdersPage($error, 'ERROR');
                }
            } else {
                $error .= 'FAIL#no_params';
                redirectToOrdersPage($error, 'ERROR');

            }
        } else {
            $error .= 'FAIL#no_params';
            redirectToOrdersPage($error, 'ERROR');
        }
    }
} else {
    $error .= 'FAIL#no_paysystem_id';
    redirectToOrdersPage($error, 'ERROR');
}

?>