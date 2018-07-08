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
  <table width='1000' align="center" border="1" bordercolor='blue' style='border-collapse: collapse;'>
  <tr>
    <th>编号</th>
    <th>类型编号</th>   
    <th>产品名称</th>
    <th>产品价格</th>
    <th>产品数量</th>
    <th>修改</th>
    <th>删除</th>   
  </tr>
  <?php if(is_array($re)): $i = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($val["pid"]); ?></td>
      <td><?php echo ($val["typeid"]); ?></td>
      <td><?php echo ($val["pname"]); ?></td>
      <td><?php echo ($val["price"]); ?></td> 
      <td><?php echo ($val["pcount"]); ?></td> 
      <td><a href='/application/index.php/admin/ajax/goodsupdate/pid/<?php echo ($val["pid"]); ?>'>修改</a></td>
      <td><a href='/application/index.php/admin/ajax/goodsdel/pid/<?php echo ($val["pid"]); ?>'>删除</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

  </table>
  
</body>
</html>