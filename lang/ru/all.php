<?php
/**
 * ���� �� ����� ��������� �����������.
 *
 * �������� �� ������ 1C-Bitrix:
 * 		"������������ �������� ���� ������ ����� �� �� ���, ��� � ������������ ����, � ���� ���������� �� ����� � ��������:
 * 		/bitrix/modules/ID ������/lang/ID �����/���� � ����� ������������ ����� ������."
 * ���� ������� ������� ���������� ��� �������� ��������� � ���� ����� ����, ����� �� ��������� ��������� ��������� ��������� ������.
 */

global $MESS;
// PAYSTO.payment/install/index.php
$MESS['PAYSTO.PAYMENT_INSTALL_NAME'] = '�������� ������� PaySto';
$MESS['PAYSTO.PAYMENT_INSTALL_DESCRIPTION'] = '������ ������ ����������� ������� ��� ���������� � ����������� ���';
$MESS['PAYSTO.PAYMENT_PREINSTALL_DESCRIPTION'] = '������ ����������� ������ ��������� ������� PaySto�';
$MESS['PAYSTO.PAYMENT_INSTALL_ERROR'] = '��� ��������� ������ �������� ������� PaySto ��������� ������ ��� ����������� ������.';

// PAYSTO.paysto/install/step_ok.php
$MESS['PAYSTO.PAYMENT_INSTALL_MESSAGE'] = '������ ��������� ������� PaySto� ��� ����������.';

// PAYSTO.payment/install/unstep_ok.php
$MESS['PAYSTO.PAYMENT_BTN_CANCEL'] = '������';
$MESS['PAYSTO.PAYMENT_SAVE_TABLES'] = '��������� ������� ������ ��������� ������� PaySto�?';

// PAYSTO.payment/options.php & PAYSTO.payment/install/step_ok.php & PAYSTO.payment/admin/PAYSTO_agent_log.php
$MESS['PAYSTO.PAYMENT_BTN_HELP'] = '������';

// admin/PAYSTO_agent_log.php
$MESS['PAYSTO.AGENT_ORDER_ID'] = 'ID ������';
$MESS['PAYSTO.AGENT_INSERT_DATATIME'] = '����� ���������� ������';
$MESS['PAYSTO.AGENT_TYPE_ERROR'] = '��� ������';
$MESS['PAYSTO.AGENT_TEXT_ERROR'] = '�������� ������';
$MESS['PAYSTO.AGENT_LOGS_TITLE'] = '���� ������ ��������� ������� PaySto�';
$MESS['PAYSTO.AGENT_LOGS_DEL'] = '�������';
$MESS['PAYSTO.AGENT_DEL_ERROR'] = '���������� ������� ������.';
$MESS['PAYSTO.AGENT_NAV'] = '���� ������';
$MESS['PAYSTO.AGENT_DEL_CONF'] = '������� ������?';
$MESS['PAYSTO.AGENT_F_ORDER_ID'] = 'ID ������';
$MESS['PAYSTO.AGENT_F_INSERT_DATATIME'] = '����� ����������';
$MESS['PAYSTO.AGENT_F_TYPE_ERROR'] = '��� ������';
$MESS['PAYSTO.AGENT_F_TEXT_ERROR'] = '�������� ������';
$MESS['PAYSTO.AGENT_FIND'] = '�����';
$MESS['PAYSTO.AGENT_F_FIND_TYTLE'] = '������� ������ ��� ������';
$MESS['POST_ALL'] = '���';

// PAYSTO.payment/options.php
$MESS['PAYSTO.AGENT_LOGS'] = '���� ������';
$MESS['PAYSTO.PAYMENT_HELP_TEXT'] = '
<h3>���������� �� ��������� � ��������� ������ ��������� ������� PaySto� � CMS 1C-Bitrix</h3>
<b>��������� ������</b>
<p>
<div>1. ����� ��� ������� �������������� �� ���� � ������ ������������������.</div>
<div>2. ������� � ������ ����������>Marketplace�. � ������ ����� ������ ��������� ������� PaySto�. ������ �������� �� ���� ������. ������ �� ������ �����������.</div>
<div>3. ������� � ������ ������ ��������� ������� PaySto�. ������ �� ������ ������������. ������ ��������� ������� ��������� ������� PaySto� ��� �����������.</div>
<div>4. ����� ��������� ������ �� ������ ���������� � ������. � ������ ������� � ������ ��������� ������� PaySto� ����� ������ ������ ������������.</div>
</p>
<h3>��������� ������</h3>
<b>��������� �������� ������� PaySto</b>
<p>
<div>1. ������� � ������: ��������>��������� ���������>��������� ��������.</div>
<div>2. � ���� ������� ��� �������� �������� ������ ������ �� ������ ��������� ��������� �������, ����� ���� � �������� ���� ������� ����, ��� �������� ����� ��������� �������� �������. ��������� ������ ���������� ����� �������� �������.</div>
<div>3. ������� �� ������� ���������� �������. ��������� ��� ����������� ����. ���� ��������� � ������ ����� �PaySto� ��� ����������� ������. ���� ������������ � ������ �������. ���� ����������� � ������ �������� 1. ���� ��������� � ������� �������� �������� �������.</div>
<div>4. ������� �� ������� ����������� ����.</div>
<div>&nbsp;&nbsp;a. � ���� ������������ ��� ������� ���� ����������� ��������� �������, ���� �����, ����� ��������� ���� �������� ������� �������� � ������������ ������. � ���� ��������� ��������� �������� ����������� �������� �������. � ���� ����������� �������� �� ��������� ������ �PaySto�. ����������� �������������� ����.</div>
<div>&nbsp;&nbsp;b. ��������� ���� ��������� ��������� ��������: ��� ����� ���������� ���������������� �������.</div>
<div>&nbsp;&nbsp;c. � ���� ���� �������� ������ ��� �������� �� ������� PaySto.</div>
<div>&nbsp;&nbsp;d. � ���� ������� - c�������� ����, ������� �� ��������� � ���������� ������ ������� �������� � ������� PaySto (Paysto.com)</div>
<div>&nbsp;&nbsp;e. � ���� �������� ������� � ���, ��� ��� ������ ����� ��������� �������� ������ ������ �� ��������� �� �������������� ������ (���������� ��� ������ ������������)</div>
<div>&nbsp;&nbsp;f. ���������� ������ ��� ��� �������� (���� ��� ���)</div>
<div>5. ������� �� ������� ������������ ���� � ��������� ��� �������� �� �������� � �������� ����������� ����.</div>
<div>6. ������ ������ �����������. � ������ �������� �������� ������� �PaySro�.</div>
</p>
<b>�������� ������</b>
<p>
<div>1. ������� � ������ ����������>������. � ������ ������� ������ ��������� ������� PaySto�. ������ �� ������ ���������. ������ ��������� ���������! ������ ����� ������ �� ������� �� ����� �����������.�.</div>
<div>2. ��� ���������� ������ ������ � ���� ������ ����� �������� ������� �������� ���� ���������� ������� ������ ��������� ������� PaySto�?�.</div>
<div>3. ������ �� ������ ���������. � ������ ������� � ������ ��������� ������� PaySto� ����� ������ ������ ��� �����������.</div>
<div>&nbsp;&nbsp;<b>����������</b></div>
<div>&nbsp;&nbsp;1. ���� ������ ������� � ���� ���������� ������� ������ ��������� ������� PaySto�?� � �� ������� � ������ ������ ����� ������� �� ���� ������. ���� �������� ������� � ������� ��������� � ����� ���������� ��� ����������� ���������, ��� ������ ����������� � ����� ��������.</div>
<div>&nbsp;&nbsp;2. ��� �������� ������ ��������� ����� � ������� ����������� ������_�_bitrix/bitrix/modules/paysto.payment�, ��� ��������� ����� ����� �������.</div>
</p>
<b>���������� ������</b>
<p>
<div>1. ������� � ������ ����������>Marketplace�>��������� �����������.</div>
<div>2. ������� �� ������� ������� ����������. ��� ������� ���������� ��� ������ ��������� ������� PaySto� ������� �� ���. ������ �� ������ ����������� �����������. ����������� ��������� �������� ����������� ����������: (����������)�.</div>
</p>';

?>