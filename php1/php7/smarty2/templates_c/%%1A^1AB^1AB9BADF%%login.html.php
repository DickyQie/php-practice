<?php /* Smarty version 2.6.30, created on 2017-11-07 09:11:39
         compiled from login.html */ ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>登录界面</title>
</head>
<body>
<form action="../controller/LoginController.php" method="post">
    <table>
        <tr><td colspan="2">内部留言板</td></tr>
        <tr>
            <td>账户:</td>
            <td><input type="name" name="name"></td>
        </tr>
        <tr>
            <td>密码:</td>
            <td><input type="password" name="pwd"></td>
        </tr>
        <tr>
            <td><input class="btnsub" type="submit" value="用户登录"></td>
            <td><input class="btnreset" type="reset" value="重新填写"></td>
        </tr>
    </table>
</form>
</body>
</html>