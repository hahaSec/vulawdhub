<?php /* Smarty version 2.6.22, created on 2018-11-20 09:44:40
         compiled from step3.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
<title>��װ���� - BlueCMS�D�ط��Ż�ר��CMS��</title>
<link href="templates/css/install.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="top">
	<div class="logo">
		<h2>BlueCMS�D�ط��Ż�ר��CMS�� ��װ����</h2>
	</div>
	<div class="link">
		<ul>
			<li><a href="http://www.bluecms.net" target="_blank">�ٷ���վ</a></li>
			<li><a href="http://www.bluecms.net/bbs" target="_blank">������̳</a></li>
			<li><a href="" target="_blank">����</a></li>
		</ul>
	</div>
	<div class="version">
		<h2>BlueCMS</h2>
	</div>
</div>

<div class="main">
	<div class="m_l">
		<dl class="step">
			<dt>��װ����</dt>
			<dd>
				<ul>
					<li class="succeed">����Э��</li>
					<li class="succeed">�������</li>
					<li class="current">��������</li>
					<li>���ڰ�װ</li>
					<li>��װ���</li>
				</ul>
			</dd>
		</dl>
	</div>
	<div class="m_r"><form name = "config_form" action = "index.php?act=step4" method="post">
		<div class="title"><h3>���ݿ�����</h3></div>
		<div class="content">
			<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="data">
				<tr>
					<td width="200">���ݿ�������</td>
					<td><input type="text" name="dbhost" value="localhost" /></td>
				</tr>
				<tr>
					<td>���ݿ����ƣ�</td>
					<td><input type="text" name="dbname" value="" /></td>
				</tr>
				<tr>
					<td>���ݿ��û�����</td>
					<td><input type="text" name="dbuser" value="" /></td>
				</tr>
				<tr>
					<td>���ݿ����룺</td>
					<td><input type="text" name="dbpass" value="" /></td>
				</tr>
				<tr>
					<td>���ݱ�ǰ׺��</td>
					<td><input type="text" name="pre" value="blue_" /></td>
				</tr>
			</table>
		</div>
		<div class="title"><h3>����Ա�˺�</h3></div>
		<div class="content">
			<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="data">
				<tr>
					<td width="200">����Ա������</td>
					<td><input type="text" name="admin_name" value="" /></td>
				</tr>
				<tr>
					<td>��¼���룺</td>
					<td><input type="password" name="admin_pwd" value="" /></td>
				</tr>
				<tr>
					<td>����ȷ�ϣ�</td>
					<td><input type="password" name="admin_pwd1" value="" /></td>
				</tr>
				<tr>
					<td>�������䣺</td>
					<td><input type="text" name="admin_email" value="" /></td>
				</tr>
				<tr>
					<td>Cookie�����룺</td>
					<td><input type="text" name="cookie_hash" value="<?php echo $this->_tpl_vars['cookie_hash']; ?>
" /></td>
				</tr>
			</table>
		</div>
		<div class="btn_sub">
			<input type="button" class="btn_back" value="��һ��" onclick="window.location.href='index.php?act=step2';" />
			<input type="submit" class="btn_next" value="��һ��" />
		</div></form>
	</div>
</div>

<div class="foot">

</div>

</body>
</html>