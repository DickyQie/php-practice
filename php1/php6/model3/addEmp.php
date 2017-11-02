<html>
<head>
    <meta charset="utf-8">
    <title>添加用户</title>
</head>

<script type="text/javascript">

</script>
<body>

    <h2>添加雇员信息表</h2>
    <form action="empProcess.php" method="post">
        <table>
            <tr>
                <td>名字</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>级别</td>
                <td><input type="text" name="gradle"></td>
            </tr>
            <tr>
                <td>邮箱</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>薪水</td>
                <td><input type="number" name="salary"></td>
            </tr>
            <input type="hidden" name="fang" value="add"/>
            <tr>
                <td><input type="submit" value="提交"></td>
                <td><input type="reset" value="重新填写"></td>
            </tr>
        </table>

    </form>
</body>
</html>
<?php
/**
 *添加用户
 *一般是一张表交个一个控制器
 *
 */
?>
