<?php
/**
 * Массив языковых констант.
 */
global $MESS;

// Для админки.
$MESS['SALE_PAYSTO_DESCRIPTION'] = '<a href=\'https://paysto.ru\' target=\'_blank\'>https://paysto.ru</a>';
$MESS['SALE_PAYSTO_ACCOUNT_ID'] = 'Номер расширенного счета';
$MESS['SALE_PAYSTO_ACCOUNT_ID_DESC'] = 'Account ID - номер расширенного счета в системе Paysto.ru';
$MESS['SALE_PAYSTO_CODE'] = 'Код проверки целостности данных';
$MESS['SALE_PAYSTO_CODE_DESC'] = 'Секретный ключ, который вы устанавливаете в настройках вашего расширенного счета в системе Paysto.ru';
$MESS['SALE_AMOUNT'] = 'Сумма к оплате';
$MESS['TEST'] = 'Тестовый режим';
$MESS['DEMO'] = 'Демо режим';

$MESS['SALE_PAYSTO_DESC'] = 'Описание платежной системы PaySto';
$MESS['SALE_PAYSTO_X_LOGIN'] = 'Код магазина';
$MESS['SALE_PAYSTO_X_LOGIN_DESC'] = 'Код магазина, полученный от PaySto ';
$MESS['SALE_PAYSTO_SECRET'] = 'Секрет';
$MESS['SALE_PAYSTO_SECRET_DESC'] = 'Секретная фраза, полученная от PaySto ';
$MESS['SALE_PAYSTO_SITE_NAME_LAT'] = 'Латинское наименование точки приема, присвоенное PaySto ';
$MESS['SALE_PAYSTO_LIFE_TIME'] = 'Время жизни формы оплаты в секундах';
$MESS['SALE_PAYSTO_LIFE_TIME_DESC'] = 'Должно быть целым положительным числом. Если покупатель проведет на форме дольше, чем указанное время, то форма оплаты будет считаться устаревшей, и платеж не будет принят. Покупателю в таком случае будет предложено вернуться на сайт.';
$MESS['SALE_PAYSTO_TIME_PAID_CHANGE'] = 'Время, в течение которого статус "paid" может быть отменён';
$MESS['SALE_PAYSTO_TIME_PAID_CHANGE_DESC'] = 'Время считается в днях (по умолчанию 14 дней)';
$MESS['SALE_PAYSTO_TIME_ORDER_SYNC'] = 'Время, в течение которого будет выполняться синхронизация статусов платежей с заказами';
$MESS['SALE_PAYSTO_TIME_ORDER_SYNC_DESC'] = 'Время считается в днях (по умолчанию 30 дней)';
$MESS['SALE_PAYSTO_SUCCESS_URL'] = 'URL-Адрес при успешной оплате';
$MESS['SALE_PAYSTO_SUCCESS_URL_DESC'] = 'URL страницы, на которую должен вернуться покупатель после успешного осуществления платежа в системе PAYSTO (максимум 128 символов)';
$MESS['SALE_PAYSTO_FAIL_URL'] = 'URL-Адрес при ошибке оплаты';
$MESS['SALE_PAYSTO_FAIL_URL_DESC'] = 'URL страницы, на которую должен вернуться покупатель после неуспешного осуществления платежа в системе PAYSTO (максимум 128 символов)';
$MESS['SALE_PAYSTO_ORDER_ID'] = 'Номер заказа';
$MESS['SALE_PAYSTO_ORDER_ID_DESC'] = 'Номер заказа в Вашем Интернет-магазине';
$MESS['SALE_PAYSTO_EMAIL'] = 'E-mail покупателя';
$MESS['SALE_PAYSTO_EMAIL_DESC'] = 'Максимум 64 символа';
$MESS['SALE_PAYSTO_FIRST_NAME'] = 'Имя покупателя';
$MESS['SALE_PAYSTO_FIRST_NAME_DESC'] = 'Максимум 64 символа';
$MESS['SALE_PAYSTO_MIDDLE_NAME'] = 'Отчество покупателя';
$MESS['SALE_PAYSTO_MIDDLE_NAME_DESC'] = 'Максимум 64 символа';
$MESS['SALE_PAYSTO_LAST_NAME'] = 'Фамилия покупателя';
$MESS['SALE_PAYSTO_LAST_NAME_DESC'] = 'Максимум 64 символа';
$MESS['SALE_PAYSTO_ADDRESS'] = 'Адрес покупателя';
$MESS['SALE_PAYSTO_ADDRESS_DESC'] = 'Максимум 128 символов';
$MESS['SALE_PAYSTO_PHONE'] = 'Телефон покупателя';
$MESS['SALE_PAYSTO_PHONE_DESC'] = 'Максимум 64 символа';
$MESS['SALE_PAYSTO_CITY'] = 'Город покупателя';
$MESS['SALE_PAYSTO_CITY_DESC'] = 'Максимум 64 символа';
$MESS['SALE_PAYSTO_ZIP'] = 'Почтовый индекс';
$MESS['SALE_PAYSTO_ZIP_DESC'] = 'Максимум 64 символа';
$MESS['SALE_PAYSTO_LANGUAGE'] = 'Код языка интерфейса платёжной страницы';
$MESS['SALE_PAYSTO_LANGUAGE_DESC'] = 'Максимум 2 символа. Может быть \'en\' или \'ru\'';
$MESS['SALE_PAYSTO_COMMENT'] = 'Комментарий к платежу';
$MESS['SALE_PAYSTO_COMMENT_DESC'] = 'Максимум 255 символов';
$MESS['SALE_PAYSTO_COUNTRY'] = 'Код страны покупателя (ISO 3166)';
$MESS['SALE_PAYSTO_COUNTRY_DESC'] = 'Максимум 3 символа';
$MESS['SALE_PAYSTO_STATE'] = 'Код штата региона';
$MESS['SALE_PAYSTO_STATE_DESC'] = 'Максимум 3 символа';
$MESS['SALE_PAYSTO_PAID_STATUS'] = 'Статус оплаченного заказа';
$MESS['SALE_PAYSTO_PAID_STATUS_DESC'] = 'Статус заказа после успешной оплаты';
$MESS['SALE_PAYSTO_SHIPPING_TAX'] = 'Ставка НДС для доставки';
$MESS['SALE_PAYSTO_TAX_NONE'] = 'без НДС';
$MESS['SALE_PAYSTO_TAX'] = 'с НДС';
$MESS['SALE_PAYSTO_TEST_MODE'] = 'Тестовый режим';
$MESS['SALE_PAYSTO_TEST_MODE_DESC'] = 'В тестовом режиме можно проверить функционал и провести фиктивные оплаты (платежные операции не создаются)';
$MESS['SALE_PAYSTO_DEMO_MODE'] = 'Демо режим';
$MESS['SALE_PAYSTO_DEMO_MODE_DESC'] = 'Платежи будут совершаться через демо-сервер: https://paysto.ru';
$MESS['SALE_PAYSTO_WORK_MODE'] = 'Рабочий режим';
$MESS['SALE_PAYSTO_YES'] = 'Да';
$MESS['SALE_PAYSTO_NO'] = 'Нет';
$MESS['SALE_PAYSTO_SEND_CUSTOMER'] = 'На почту покупателя';
$MESS['SALE_PAYSTO_SEND_CUSTOMER_DESC'] = 'Отправляется независимо от режима оплаты. Подтверждение не требуется.';
$MESS['SALE_PAYSTO_SEND_OTHER_EMAIL'] = 'На указанный(ые) email';
$MESS['SALE_PAYSTO_SEND_OTHER_EMAIL_DESC'] = 'Отправляется независимо от режима оплаты. Подтверждение не требуется.';
$MESS['SALE_PAYSTO_MAIL_FOR_SEND'] = 'От кого отправить ссылку (ваш Email)';
$MESS['SALE_PAYSTO_MAIL_FOR_SEND_DESC'] = 'Введите email от которого будет отправлено письмо со ссылкой на оплату.';
$MESS['SALE_PAYSTO_ONLY_FROM_IPS'] = 'Обратные вызовы только с адресов';
$MESS['SALE_PAYSTO_ONLY_FROM_IPS_DESC'] = 'Принимать обратные вызовы только с определенных IP адресов для повышения безопасности';
$MESS['SALE_PAYSTO_SERVER_LIST'] = 'Список IP';
$MESS['SALE_PAYSTO_SERVER_LIST_DESC'] = 'Вводите через запятую адреса серверов, с которых можно принимать обратные вызовы по умолчанию 95.213.209.218 95.213.209.219 95.213.209.220 95.213.209.221 95.213.209.222. Вводите список пожалуйста разделенный запятой. Если вы ничего не введете в данное поле, будет использловаться список по умолчанию.';

// Groups
$MESS['SALE_PAYSTO_G_STATUSES'] = 'Статус заказов';
$MESS['SALE_PAYSTO_G_CASHBOX'] = 'При использовании Онлайн-касс через сервис https://www.paysto.ru';
$MESS['SALE_PAYSTO_G_MAIN'] = 'Основные настройки';
$MESS['SALE_PAYSTO_G_SEND'] = 'Всегда отправлять письмо со ссылкой на оплату';


// Для чека и обновления статусов.
$MESS['SASP_AS000'] = 'АВТОРИЗАЦИЯ УСПЕШНО ЗАВЕРШЕНА';
$MESS['SASP_AS100'] = 'ОТКАЗ В АВТОРИЗАЦИИ';
$MESS['SASP_AS101'] = 'ОТКАЗ В АВТОРИЗАЦИИ. Ошибочный номер карты';
$MESS['SASP_AS102'] = 'ОТКАЗ В АВТОРИЗАЦИИ. Недостаточно средств';
$MESS['SASP_AS104'] = 'ОТКАЗ В АВТОРИЗАЦИИ. Неверный срок действия карты';
$MESS['SASP_AS105'] = 'ОТКАЗ В АВТОРИЗАЦИИ. Превышен лимит';
$MESS['SASP_AS107'] = 'ОТКАЗ В АВТОРИЗАЦИИ. Ошибка приема данных';
$MESS['SASP_AS108'] = 'ОТКАЗ В АВТОРИЗАЦИИ. Подозрение на мошенничество';
$MESS['SASP_AS109'] = 'ОТКАЗ В АВТОРИЗАЦИИ. Превышен лимит операций PaySto';
$MESS['SASP_AS200'] = 'ПОВТОРИТЕ АВТОРИЗАЦИЮ';
$MESS['SASP_AS998'] = 'ОШИБКА СИСТЕМЫ. Свяжитесь с PAYSTO';

// Для чека.
$MESS['SALE_PAYSTO_MERCH_NAME'] = 'Торговое наименование мёрчанта: ';
$MESS['SALE_PAYSTO_MERCH_NAME_LAT'] = 'Латинское наименование точки приема, присвоенное PaySto: ';
$MESS['SALE_PAYSTO_MERCH_UNIQ_URL'] = 'Электронный адрес магазина: ';
$MESS['SALE_PAYSTO_MERCH_TEL'] = 'Контактный телефон предприятия: ';
$MESS['SALE_PAYSTO_MERCH_EMAIL'] = 'Контактная электронная почта предприятия: ';
$MESS['SALE_PAYSTO_PS_SUM'] = 'Сумма операции в валюте: ';
$MESS['SALE_PAYSTO_PS_DATE'] = 'Дата операции: ';
$MESS['SALE_PAYSTO_BILLNUMBER'] = 'Уникальный идентификатор транзакции: ';
$MESS['SALE_PAYSTO_USER_FIO'] = 'Ф.И.О: ';
$MESS['SALE_PAYSTO_APPROVEL_CODE'] = 'Код подтверждения: ';
$MESS['SALE_PAYSTO_TRANSACTION_TYPE'] = 'Тип операции: ';
$MESS['SALE_PAYSTO_ERROR'] = 'Для данного заказа в системе PaySto не существует соответствующего платежа.';
$MESS['SALE_PAYSTO_PRINT_CHECK'] = 'Печать чека';
$MESS['SALE_PAYSTO_CLOSE_WINDOW'] = 'Закрыть окно';

// Для страницы оплаты.
$MESS['SUSP_DESC'] = 'Для оплаты Вы будете перенаправлены на защищенную платежную страницу процессинговой компании <a href="https://paysto.ru" >PaySto</a>.
 Страница оплаты отвечает последним международным требованиям безопасности платежных систем Visa и MasterCard.';
$MESS['SUSP_ORDER_SUM'] = 'Сумма к оплате: ';
$MESS['SUSP_ACCOUNT_NO'] = 'Заказ №: ';
$MESS['SUSP_ORDER_FROM'] = ' от ';
$MESS['SUSP_PAYSTO_PAY_BUTTON'] = 'Оплатить';