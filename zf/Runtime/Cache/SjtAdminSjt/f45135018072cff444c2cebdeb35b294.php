<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/SjtAdminSjt/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript">

</script>
<style type="text/css">
#listuser{
	width:70%;
	margin-top:50px;
	}

#listuser tr td{
	height:50px;
	text-align:left;
	padding-left:20px;
	vertical-align:middle;
	color:#00F;
	font-weight:bold;
	}

#listuser input[type='text']{
    width:50px;
	vertical-align:middle;
	}	
</style>
</head>
<base target="_self">
<body>
<form name="Form1" method="post" action="/SjtAdminSjt_System_xgmmedit.html">

<table cellpadding="0" cellspacing="0" border="0" id="listuser">

<tr>
<td><span style="color:#000">请输入原密码：</span><input type="password" name="YPassWord" id="YPassWord" style="width:200px;"></td>
</tr>

<tr>
<td>请输入新密码：<input type="password" name="XPassWord" id="XPassWord" style="width:200px;"></td>
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;确认新密码：<input type="password" name="PassWord" id="PassWord" style="width:200px;"></td>
</tr>

</table>
<div style="width:100%; margin:0px auto; margin-top:10px; text-align:center; height:auto; font-size:20px; font-weight:bold;">
<input type="submit" value="确认修改">
</div>
</form>
</body>
</html>