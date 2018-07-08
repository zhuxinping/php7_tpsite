<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/css/style.css">
</head>
<body>
<a href='<?php echo U("manager/showlogin");?>'>新闻</a>
<a href="getallnews.html">新闻</a>
<a href="/Application/index.php/admin/news/getallnews">新闻</a>
<a href="/Application/index.php/admin/news/getallnews">新闻</a>
<a href="/Application/index.php/admin/manager/showlogin">新闻</a>
姓名是: <?php echo ($name); ?><br>
<?php
 echo '姓名是:'.$name; ?><br>
<?php echo '我的别名是:'.$nicname ?><br>
<img src="/Public/image/banner3.png" alt="">
</body>
<script src="/Public/js/index.js"></script>
</html>