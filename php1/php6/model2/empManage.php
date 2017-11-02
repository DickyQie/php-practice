<html>
<head>
    <meta charset="utf-8">
    <title>主界面</title>
</head>
<style type="text/css">

</style>
<body>

    <?php


    /**
     * 显示用户名
     */
    echo "欢迎".$_GET['name']."登录成功";
    echo "<br/><a href='login.php'>重新登录</a>"; ?>


    <div>
        <h1>主界面</h1>
        <a href="empList.php">管理用户</a><br>
        <a href="#">添加用户</a><br>
        <a href="#">查询用户</a><br>
        <a href="#">推出系统</a><br>
    </div>

</body>

</html>

