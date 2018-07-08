<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>获取新闻</h1>
当前文件的路径:<?php echo ($_SERVER['PHP_SELF']); ?><br>
商品的编号:<?php echo ($_GET['pid']); ?><br>
商品的名称:<?php echo ($_REQUEST['pname']); ?><br>
默认的模块是:<?php echo (C("DEFAULT_MODULE")); ?><br>
默认的控制器常量是:<?php echo (CONTROLLER_NAME); ?><br>
系统当前时间是:<?php echo (date(('Y-m-d H:i:s'),$time)); ?><br>
当前的密码加密后是:<?php echo (md5($pwd)); ?><br>
截取后字符是:<?php echo (substr($str,0,7)); ?><br>
默认值是:<?php echo ((isset($name) && ($name !== ""))?($name):'张三丰,没有留下姓名!'); ?><br>
</body>
</html>