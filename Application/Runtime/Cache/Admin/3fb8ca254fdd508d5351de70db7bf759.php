<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
foreach使用-一维数组<br>
name:数组来源<br>
item:数组值<br>
key:数组的下标<br>
<?php if(is_array($arr2)): foreach($arr2 as $k=>$val): echo ($k); ?>=><?php echo ($val); ?><br><?php endforeach; endif; ?>
<br>
<?php if(is_array($arr2)): $k = 0; $__LIST__ = $arr2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($k % 2 );++$k; echo ($k); ?>=><?php echo ($val); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
<br>
<?php if(is_array($arr3)): foreach($arr3 as $key=>$v1): if(is_array($v1)): foreach($v1 as $key=>$v2): echo ($v2); ?><br><?php endforeach; endif; endforeach; endif; ?>
<br>
<?php if(is_array($arr4)): foreach($arr4 as $key=>$val): echo ($val["name"]); ?><br>
    <?php echo ($val["from"]); ?><br>
    <?php echo ($val["age"]); ?><br><?php endforeach; endif; ?>
<br>
<?php if(is_array($arr3)): $i = 0; $__LIST__ = $arr3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i; if(is_array($v1)): $i = 0; $__LIST__ = $v1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i; echo ($v2); ?><br><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
<br>
<?php if(is_array($arr4)): $i = 0; $__LIST__ = $arr4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; echo ($val["name"]); ?><br>
    <?php echo ($val["from"]); ?><br>
    <?php echo ($val["age"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>