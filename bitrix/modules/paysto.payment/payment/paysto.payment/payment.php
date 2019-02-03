<?php

/**
 * Get hash code
 *
 * @param $x_login
 * @param $x_fp_sequence
 * @param $x_fp_timestamp
 * @param $x_amount
 * @param $x_currency_code
 * @return string
 */
function get_x_fp_hash($x_login, $x_fp_sequence, $x_fp_timestamp, $x_amount, $x_currency_code, $secret)
{
    $arr = array($x_login, $x_fp_sequence, $x_fp_timestamp, $x_amount, $x_currency_code);
    $str = implode('^', $arr);
    return hash_hmac('md5', $str, $secret);
}


if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
include(GetLangFileName(dirname(__FILE__) . '/', '/paysto.php'));

$sOrderID = $GLOBALS['SALE_INPUT_PARAMS']['ORDER']['ID'];
$sOrderID = trim($sOrderID);
$sOrderID = (strlen($ORDER_ID > 0)) ? $ORDER_ID : $sOrderID;
$arOrder = CSaleOrder::GetByID($sOrderID);
$basket = \Bitrix\Sale\Order::load($sOrderID)->getBasket();


$statuses_paid = array(CSalePaySystemAction::GetParamValue('PAID_STATUS'));

// If payment exists than show result
if (in_array($arOrder['STATUS_ID'], $statuses_paid)) {
    $arCurrentStatus = CSaleStatus::GetByID($arOrder['STATUS_ID']);
    echo '<br><strong>' . $arCurrentStatus['NAME'] . '</strong>';
} else {
// PAW payment form generate here

    $url_paysto_pay = 'https://paysto.com/ru/pay/AuthorizeNet';

    // PAW params
    $x_login = trim(CSalePaySystemAction::GetParamValue('X_LOGIN'));
    $x_description = trim(CSalePaySystemAction::GetParamValue('DESC')) . ' #' . $arOrder["ID"];
    $secret = trim(CSalePaySystemAction::GetParamValue('SECRET'));
    $x_fp_sequence = $arOrder["ID"];
    $x_invoice_num = $arOrder["ID"];
    $x_amount = number_format($arOrder['PRICE'], 2, '.', '');
    $x_currency_code = strtoupper(trim($arOrder['CURRENCY']));
    $x_currency_code = ($x_currency_code == 'RUR') ? 'RUB' : $x_currency_code;
    $x_fp_timestamp = time();
    $x_fp_hash = get_x_fp_hash($x_login, $x_fp_sequence, $x_fp_timestamp, $x_amount, $x_currency_code, $secret);
    $x_relay_url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . '/personal/order/detail/';

    // get customer's email
    $x_email = '';
    $res = CSaleOrderPropsValue::GetOrderProps($arOrder['ID']);
    while ($row = $res->Fetch()) {
        if ($row['IS_EMAIL'] == 'Y') {
            $x_email = $row['VALUE'];
        }
    }

    if (empty($x_email) && ($user = CUser::GetByID($arOrder['USER_ID'])->Fetch())) {
        $x_email = $user['EMAIL'];
    }

    //add products
    $pos = 1;
    $x_line_item = '';


    foreach ($basket as $item) {
        $lineArr = array();
        $lineArr[] = '№' . $pos . "  ";
        $lineArr[] = substr($item->getProductId(), 0, 30);
        $lineArr[] = substr($item->getField('NAME'), 0, 254);
        $lineArr[] = substr($item->getQuantity(), 0, 254);
        $lineArr[] = number_format($item->getPrice(), 2, '.',
            '');
        if ($item->getField('VAT_RATE') > 0) {
            $vat = 'Y';
        } else {
            $vat = 'N';
        }
        $lineArr[] = $vat;
        $x_line_item .= implode('<|>', $lineArr) . "0<|>\n";
        $pos++;
    }
    // add delivery
    $deliveryPrice = number_format($arOrder['PRICE_DELIVERY'], 2, '.', '');
    if ($deliveryPrice > 0.00) {
        $lineArr = array();
        $lineArr[] = '№' . $pos . "  ";
        $lineArr[] = $arOrder['DELIVERY_ID'];
        $lineArr[] = 'Доставка / Delivery №' . $arOrder["ID"];
        $lineArr[] = 1;
        $lineArr[] = number_format($deliveryPrice, 2, '.', '');
        $lineArr[] = trim(CSalePaySystemAction::GetParamValue('SHIPPING_TAX', 'N'));
        $x_line_item .= implode('<|>', $lineArr) . "0<|>\n";
        $pos++;
    }

    ?>

    <div class="paystoPayform">
        <p>
            <?php echo GetMessage('SUSP_ACCOUNT_NO') ?>
            <span><?php echo $arOrder['ID'] ?></span>
            <i><?php echo GetMessage('SUSP_ORDER_FROM') . $arOrder['DATE_INSERT'] ?></i>
        </p>
        <p>
            <?php echo GetMessage('SUSP_ORDER_SUM') ?>
            <span><?php echo SaleFormatCurrency($arOrder['PRICE'], $arOrder['CURRENCY']) ?></span>
        </p>
        <span class="paystoDesc"><?php echo GetMessage('SUSP_DESC') ?></span>
        <form action="<?php echo $url_paysto_pay ?>" method="post" accept-charset="utf-8">
            <input type="hidden" name="x_description" value="<?php echo $x_description ?>">
            <input type="hidden" name="x_login" value="<?php echo $x_login ?>">
            <input type="hidden" name="x_amount" value="<?php echo $x_amount ?>">
            <input type="hidden" name="x_email" value="<?php echo $x_email ?>">
            <input type="hidden" name="x_currency_code" value="<?php echo $x_currency_code ?>">
            <input type="hidden" name="x_fp_sequence" value="<?php echo $x_fp_sequence ?>">
            <input type="hidden" name="x_fp_timestamp" value="<?php echo $x_fp_timestamp ?>">
            <input type="hidden" name="x_fp_hash" value="<?php echo $x_fp_hash ?>">
            <input type="hidden" name="x_invoice_num" value="<?php echo $x_invoice_num ?>">
            <input type="hidden" name="x_relay_response" value="TRUE">
            <input type="hidden" name="x_relay_url" value="<?php echo $x_relay_url ?>">
            <input type="hidden" name="x_line_item" value="<?php echo $x_line_item ?>">
            <input type="hidden" name="followup" value="true">
            <input type="hidden" name="javascriptEnabled" value="true">
            <?php if ($x_email) echo '<input type="hidden" name="additionalParameters.ownerLogin" value="' . $x_email . '">' ?>
            <input type="submit" value="<?php echo GetMessage('SUSP_PAYSTO_PAY_BUTTON') ?>">
        </form>
    </div>
    <style>
        .paystoPayform {
            border: 2px solid #5cb85c;
            padding: 10px;
        }

        .paystoPayform P SPAN {
            font-weight: bold;
        }

        .paystoPayform .paystoDesc {
            font-size: 11px;
            line-height: 7px;
        }

        .paystoPayform FORM {
            text-align: center;
        }

        .paystoPayform INPUT {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33;
            border-radius: 6px;
            color: #fff;
            background-color: #5cb85c;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            white-space: nowrap;
            border: 0px;
        }
    </style>
<?php } ?>