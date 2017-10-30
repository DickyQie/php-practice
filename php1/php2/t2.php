<?php
$var='0123456789zxcvbnmasdflkhgpoiuytqwerQWEERTYUIOPASDFGKJHLZXCVBNM';
$ll='<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0, 255).','.mt_rand(0, 255).')">'.$var{mt_rand(0, strlen($var)-1)}.'</span>';
$ll.='<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0, 255).','.mt_rand(0, 255).')">'.$var{mt_rand(0,strlen($var)-1)}.'</span>';
$ll.='<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0, 255).','.mt_rand(0, 255).')">'.$var{mt_rand(0,strlen($var)-1)}.'</span>';
$ll.='<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0, 255).','.mt_rand(0, 255).')">'.$var{mt_rand(0,strlen($var)-1)}.'</span>';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<!--t6.php   t8.php  -->
<form action="t3.php" method="post">
    <table border='1' cellpadding='0' cellspacing='0' bgcolor='#abcde' width='30%'>
        <tr >
            <td align="right">用户名</td>
            <td><input type="text" name="username" placeholder='请输入用户名' id=""/>请输入用户名</td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type="password" name="pwd1" id="" placeholder="请输入密码"/></td>
        </tr>
        <tr>
            <td>确认密码：</td>
            <td><input type="password" name="pwd2" id="" placeholder="确认密码" /></td>
        </tr>
        <tr>
            <td>邮箱：</td>
            <td><input type="email" name="email" id="" placeholder="邮箱"/>包含@</td>
        </tr>
        <tr>
            <td>年龄：</td>
            <td><input type="number" name="age" id="" placeholder="年龄"/>1~125</td>
        </tr>
        <tr>
            <td>验证码：</td>
            <td><input type="text" name="yzm" id="" placeholder="验证码"/>
                <?php
                echo $ll;
                ?>
                <!-- 隐藏域  验证 -->
                <input type="hidden" name="yzm1" value='<?php echo $ll;?>'/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="sub" value="提交" />
            </td>

        </tr>
    </table>



</form>


</body>

</html>


