<html>
<head>
    <meta charset="utf-8">
    <title>登录</title>
</head>
<style type="text/css">
    body{
        margin: 0 auto;
    }
    .header{
        width: 500px;
        margin: 100px auto;
        background: cadetblue;
        padding: 100px;
    }
    .btnsub{
        width: 99px;
        height: 25px;
        margin-top: 15px;
    }

    .btnreset{
        width: 99px;
        height: 25px;
        margin-top: 15px;
    }

    img{
    }

</style>
<body>

<div class="header">

 <h2>管理员登录</h2>
    <form action="loginProcess.php" method="post">
        <table>
            <tr>
                <td>ID号:</td>
                <td><input type="text" name="userid" value="<?php
                        if(!empty($_COOKIE['empzqname'])){
                            echo $_COOKIE['empzqname'];
                        }else{
                            echo "";
                        }
                    ?>"></td>
            </tr>
            <tr>
                <td>密码:</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td>验证码:</td>
                <td><input type="text" name="checkcode">
                    <img src="../image/CodeModel.php" onclick="this.src='../image/CodeModel.php?'+Math.random()">
                </td>
            </tr>
            <tr>
                <td>是否保存用户名</td>
                <td><input type="checkbox" name="check" value="name"></td>
            </tr>
            <tr>
                <td><input class="btnsub" type="submit" value="用户登录"></td>
                <td><input class="btnreset" type="reset" value="重新填写"></td>
            </tr>
        </table>
    </form>
    <?php
        if(!empty($_COOKIE['empzqtime'])){
            echo "<p style='color: royalblue'>上次的登录时间是:{$_COOKIE['empzqtime']}</p>";
        }
        if(!empty($_GET["error"])) {
            if($_GET['error']==1){
                echo '<p style="color: red">你的用户名和密码错误</p>';
            }elseif($_GET["error"]==2){
                echo '<p style="color: red">验证码输入错误</p>';
            }
        }
    ?>
</div>
</body>
</html>