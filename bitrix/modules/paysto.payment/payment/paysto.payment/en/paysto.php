<?php
global $MESS;

// ��� �������.
$MESS['SALE_PAYSTO_DESCRIPTION'] = '<a href=\'https://paysto.ru\' target=\'_blank\'>https://paysto.ru</a>';
$MESS['SALE_PAYSTO_DESC'] = 'Description of the payment system PaySto ';
$MESS['SALE_PAYSTO_SHOP_IDP'] = 'Shop ID';
$MESS['SALE_PAYSTO_SHOP_IDP_DESC'] = 'Shop ID received from PaySto ';
$MESS['SALE_PAYSTO_SHOP_LOGIN'] = 'Login';
$MESS['SALE_PAYSTO_SHOP_LOGIN_DESC'] = 'Login, received from PaySto ';
$MESS['SALE_PAYSTO_SHOP_PASSWORD'] = 'Password';
$MESS['SALE_PAYSTO_SHOP_PASSWORD_DESC'] = 'Password, received from PaySto ';
$MESS['SALE_PAYSTO_SITE_NAME_LAT'] = 'Merchant name in Latin, assigned by PaySto ';
$MESS['SALE_PAYSTO_LIFE_TIME'] = 'Payment page lifetime in seconds ';
$MESS['SALE_PAYSTO_LIFE_TIME_DESC'] = 'It should be in the form of integer positive number. If a Purchaser spends more time on the page than it is determined, the payment page will be considered stale and the payment will not be accepted. In this case, a Purchaser will be offered to return to a Merchant\'s site.';
$MESS['SALE_PAYSTO_TIME_PAID_CHANGE'] = 'The time, during which the "paid" status can be cancelled';
$MESS['SALE_PAYSTO_TIME_PAID_CHANGE_DESC'] = 'The time is calculated in days (14 days by default)';
$MESS['SALE_PAYSTO_TIME_ORDER_SYNC'] = 'The time within which will be synchronized with the payment status of orders';
$MESS['SALE_PAYSTO_TIME_ORDER_SYNC_DESC'] = 'The time is calculated in days (30 days by default)';
$MESS['SALE_PAYSTO_SUCCESS_URL'] = 'Page URL for successful transaction (URL_RETURN_OK)';
$MESS['SALE_PAYSTO_SUCCESS_URL_DESC'] = 'Page URL the purchaser should be returned to after a successful transaction in PaySto system (maximum 128 symbols)';
$MESS['SALE_PAYSTO_FAIL_URL'] = 'Page URL for unsuccessful transaction (URL_RETURN_NO)';
$MESS['SALE_PAYSTO_FAIL_URL_DESC'] = 'URL of the page to return to in case of failed payment in PaySto (maximum 128 characters)';
$MESS['SALE_PAYSTO_TESTMODE'] = 'Test mode';
$MESS['SALE_PAYSTO_TESTMODE_DESC'] = 'If an empty value - the store will operate as usual';
$MESS['SALE_PAYSTO_DEMOMODE'] = 'Demo mode';
$MESS['SALE_PAYSTO_DEMOMODE_DESC'] = 'If an empty value - the store will operate as usual';
$MESS['SALE_PAYSTO_ORDER_ID'] = 'Order number';
$MESS['SALE_PAYSTO_ORDER_ID_DESC'] = 'Order number in your e-Shop';
$MESS['SALE_PAYSTO_EMAIL'] = 'E-mail';
$MESS['SALE_PAYSTO_EMAIL_DESC'] = 'Maximum 64 characters';
$MESS['SALE_PAYSTO_FIRST_NAME'] = 'First name';
$MESS['SALE_PAYSTO_FIRST_NAME_DESC'] = 'Maximum 64 characters';
$MESS['SALE_PAYSTO_MIDDLE_NAME'] = 'Middle buyer';
$MESS['SALE_PAYSTO_MIDDLE_NAME_DESC'] = 'Maximum 64 characters';
$MESS['SALE_PAYSTO_LAST_NAME'] = 'Last name';
$MESS['SALE_PAYSTO_LAST_NAME_DESC'] = 'Maximum 64 characters';
$MESS['SALE_PAYSTO_ADDRESS'] = 'Address';
$MESS['SALE_PAYSTO_ADDRESS_DESC'] = 'Maximum 128 characters';
$MESS['SALE_PAYSTO_PHONE'] = 'Phone';
$MESS['SALE_PAYSTO_PHONE_DESC'] = 'Maximum 64 characters';
$MESS['SALE_PAYSTO_CITY'] = 'City';
$MESS['SALE_PAYSTO_CITY_DESC'] = 'Maximum 64 characters';
$MESS['SALE_PAYSTO_ZIP'] = 'Zip code';
$MESS['SALE_PAYSTO_ZIP_DESC'] = 'Maximum 64 characters';
$MESS['SALE_PAYSTO_LANGUAGE'] = 'Interface language code of the payment page';
$MESS['SALE_PAYSTO_LANGUAGE_DESC'] = 'Maximum 2 characters (\'en \' or \'ru \')';
$MESS['SALE_PAYSTO_COMMENT'] = 'Comment to the transaction';
$MESS['SALE_PAYSTO_COMMENT_DESC'] = 'Maximum 255 characters';
$MESS['SALE_PAYSTO_COUNTRY'] = 'Country code (ISO 3166)';
$MESS['SALE_PAYSTO_COUNTRY_DESC'] = 'Maximum 3 characters';
$MESS['SALE_PAYSTO_STATE'] = 'Code State Region';
$MESS['SALE_PAYSTO_STATE_DESC'] = 'Maximum 3 characters';
$MESS['SALE_PAYSTO_PAID_STATUS'] = 'Paid order status';
$MESS['SALE_PAYSTO_SHIPPING_TAX'] = 'NDS for Shipping';
$MESS['SALE_PAYSTO_SEND_CUSTOMER'] = 'To the customer\'s email';
$MESS['SALE_PAYSTO_SEND_CUSTOMER_DESC'] = 'Always send';
$MESS['SALE_PAYSTO_SEND_OTHER_EMAIL'] = 'To this email(s)';
$MESS['SALE_PAYSTO_SEND_OTHER_EMAIL_DESC'] = 'Always send';
$MESS['SALE_PAYSTO_ONLY_FROM_IPS'] = 'Receive callback';
$MESS['SALE_PAYSTO_ONLY_FROM_IPS_DESC'] = 'Receive calbacks only from approved IPs for more safety';
$MESS['SALE_PAYSTO_SERVER_LIST'] = 'Server IP list';
$MESS['SALE_PAYSTO_SERVER_LIST_DESC'] = 'Input server list with comma separated 95.213.209.218, 95.213.209.219, 95.213.209.220, 95.213.209.221, 95.213.209.222. If you don\'t input list system stay this field empty.';

// ��� ���� � ���������� ��������.
$MESS['SASP_AS000'] = 'SUCCESSFUL AUTHORIZATION';
$MESS['SASP_AS100'] = 'AUTHORIZATION DENIAL';
$MESS['SASP_AS101'] = 'AUTHORIZATION DENIAL. Invalid card number ';
$MESS['SASP_AS102'] = 'AUTHORIZATION DENIAL. Not enough funds ';
$MESS['SASP_AS104'] = 'AUTHORIZATION DENIAL. Wrong expiration date ';
$MESS['SASP_AS105'] = 'AUTHORIZATION DENIAL. Limit is exceeded ';
$MESS['SASP_AS107'] = 'AUTHORIZATION DENIAL. Data receive error';
$MESS['SASP_AS108'] = 'AUTHORIZATION DENIAL. Fraud suspicion ';
$MESS['SASP_AS109'] = 'AUTHORIZATION DENIAL. The limit for PaySto operations is exceeded';
$MESS['SASP_AS200'] = 'REPEAT AUTHORIZATION ';
$MESS['SASP_AS998'] = 'SYSTEM ERROR. Please, contact PaySto';

// ��� ����.
$MESS['SALE_PAYSTO_MERCH_NAME'] = 'Merchant name: ';
$MESS['SALE_PAYSTO_MERCH_NAME_LAT'] = 'Merchant e-Shop name in Latin, assigned by PaySto: ';
$MESS['SALE_PAYSTO_MERCH_UNIQ_URL'] = 'Merchant URL: ';
$MESS['SALE_PAYSTO_MERCH_TEL'] = 'Company contact phone: ';
$MESS['SALE_PAYSTO_MERCH_EMAIL'] = 'Company contact e-mail: ';
$MESS['SALE_PAYSTO_PS_SUM'] = 'Transaction amount (currency): ';
$MESS['SALE_PAYSTO_PS_DATE'] = 'Transaction date: ';
$MESS['SALE_PAYSTO_BILLNUMBER'] = 'Bill number: ';
$MESS['SALE_PAYSTO_USER_FIO'] = 'Cardholder name: ';
$MESS['SALE_PAYSTO_APPROVEL_CODE'] = 'Verification code: ';
$MESS['SALE_PAYSTO_TRANSACTION_TYPE'] = 'Transaction type: ';
$MESS['SALE_PAYSTO_ERROR'] = 'This order does not any corresponding payment in the PaySto system.';
$MESS['SALE_PAYSTO_PRINT_CHECK'] = 'Print check';
$MESS['SALE_PAYSTO_CLOSE_WINDOW'] = 'Close window';

// Groups
$MESS['SALE_PAYSTO_G_STATUSES'] = 'Statuses';
$MESS['SALE_PAYSTO_G_CASHBOX'] = 'Using online-cashbox';
$MESS['SALE_PAYSTO_G_MAIN'] = 'Main options';
$MESS['SALE_PAYSTO_G_SEND'] = 'Send always payment link';

// ��� �������� ������.
$MESS['SUSP_DESC_TITLE'] = 'Description of the payment system: ';
$MESS['SUSP_ORDER_SUM'] = 'Total: ';
$MESS['SUSP_ACCOUNT_NO'] = 'Order no.';
$MESS['SUSP_ORDER_FROM'] = ' from ';
$MESS['SUSP_PAYSTO_PAY_BUTTON'] = 'Pay';