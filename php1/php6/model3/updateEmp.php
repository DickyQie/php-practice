<?php
    require_once("EmpService.class.php");
    $id=$_GET['id'];
    $empService=new EmpService();
    $emp=$empService->updateSelectEmpById($id);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>修改用户信息</title>
</head>
<body>
    <form action="empProcess.php" method="post">
        <table>
            <!--
                返回数组 写法
            <tr>
                <td>编号</td>
                <td><input type="text" name="id" readonly  value="<?php /*echo $emp[0]['id']; */?>"></td>
            </tr>
            -->
            <tr>
                <td>编号</td>
                <td><input type="text" name="id" readonly  value="<?php echo $emp->getId(); ?>"></td>
            </tr>
            <tr>
                <td>名字</td>
                <td><input type="text" name="name" value="<?php echo $emp->getName(); ?>"></td>
            </tr>
            <tr>
                <td>级别</td>
                <td><input type="text" name="gradle" value="<?php echo $emp->getGrade(); ?>"></td>
            </tr>
            <tr>
                <td>邮箱</td>
                <td><input type="email" name="email" value="<?php echo $emp->getEmail(); ?>"></td>
            </tr>
            <tr>
                <td>薪水</td>
                <td><input type="number" name="salary" value="<?php echo $emp->getSaraly(); ?>"></td>
            </tr>
            <input type="hidden" name="fang" value="update"/>
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
 *修改用户信息
 */