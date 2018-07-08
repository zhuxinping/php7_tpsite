<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<ul>
    <?php if(is_array($re)): $i = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
           <?php echo ($val["pid"]); ?>
        </li>
        <li>
            <?php echo ($val["typeid"]); ?>
        </li>
        <li>
            <?php echo ($val["pname"]); ?>
        </li>
        <li>
            <?php echo ($val["pcount"]); ?>
        </li>
        <li>
            <?php echo ($val["pid"]); ?>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</body>
</html>