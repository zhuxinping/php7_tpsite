<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
	body{
		font-size:12px;
	}
</style>

</head>

<body>

<form id="form1" name="form1" method="post" action="/index.php/Admin/Ar/login" >
  <table width="600" border="1" align="center" bordercolor="#000000">
    <tr>
      <th colspan="2">用户登录</th>
    </tr>
    <tr>
      <td>用户名：</td>
      <td><input name="username" type="text" value="" /></td>
    </tr>
    <tr>
      <td>密码：</td>
      <td><input name="pwd" type="text" value=""  /></td>
    </tr>
    <tr>
      <td>验证码：</td>
      <td><input name="yzm" type="text" value=""  /><img src="/index.php/Admin/Ar/verify" onclick="this.src='/index.php/Admin/Ar/verify/'+Math.random()"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit"  value="提交" />
      <input type="reset"  value="重置" /></td>
    </tr>
  </table>
</form>
</body>
</html>