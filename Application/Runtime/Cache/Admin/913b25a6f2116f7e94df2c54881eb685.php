<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo ($a+$b); ?>;
<?php echo ($a-$b); ?>;
<?php if($score >= 90): ?>优秀!
    <?php elseif($score >= 80): ?>
    良好!
    <?php elseif($score >= 70): ?>
    中等!
    <?php elseif($score >= 60): ?>
    差!
    <?php else: ?>
    不及格!<?php endif; ?>
</body>
</html>