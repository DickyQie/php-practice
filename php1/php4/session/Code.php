<?php
/***
 * Session实际运用
 * 验证码防止恶意攻击
 * 防止灌水
 *
 * extension=php_gd2.dll 绘图启动
 */
//dechex: 十进制转换为十六进制

$check="";
for($i=0;$i<4;$i++){
    $check.=dechex(rand(1,15));
}
echo "生成的验证码:".$check."<br>";

//利用session验证
?>

<html>
<head>
    <meta charset="utf-8">
    <title>登录</title>
</head>

<script type="text/javascript">
    function changing(){
        document.getElementById('checkpic').src="CodeModel.php?"+Math.random();
    }
</script>
<body>
    <img id="checkpic" onclick="changing();" src='CodeModel.php' />
</body>
</html>