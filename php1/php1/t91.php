
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
</head>
<body>

<a href="t9.php?p=<?php echo urlencode("编码");?>">编码测试</a>

</body>
</html>
<?php
$str="编码";
echo urldecode($str);
echo urlencode($str);
echo "<br/>";



?>

