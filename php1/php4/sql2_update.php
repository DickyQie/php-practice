<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/31
 * Time: 17:49
 *
 * 修改操作
 */

$link=mysql_connect('localhost','root','123456');
if($link){
    $db=mysql_select_db('happy',$link);
    if(!$db){
        echo "连接失败";
        exit;
    }else{
        mysql_query("set character set 'utf8'");
        mysql_query("set names 'utf8");
    }
}else{
    echo "数据库对接失败";
    exit;
}
$id=$_GET["id"];
$sql="select * from userinfo where id=$id";
$result=mysql_query($sql,$link);
$data=mysql_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>

<style type="text/css">
    *{
        margin: 0 0;
        padding: 0 0;
    }
    div{
        margin: auto;
    }
    th,td{
        height: 45px;
    }
    input{
        height: 25px;
    }
    textarea{
        width: 200px;
        height: 70px;
    }
    #btnsub{
        width: 150px;
        background: rosybrown;
    }
</style>
<body>

<div>
    <form action="sql2_dao.php?type=update&id=<?php echo $id; ?>" method="post">
        <table border="1px" cellpadding="0" cellspacing="0" width="45%">
            <tr>
                <th colspan="2" align="center">个人信息表</th>
            </tr>

            <td align="center">姓名：</td>
            <td><input type="text" name="username" placeholder="请输入姓名" value="<?php echo $data['username']; ?>"></td>
            </tr>
            <tr>
                <td align="center">年龄：</td>
                <td><input type="number" name="age" value="<?php echo $data['age']; ?>"></td>
            </tr>
            <tr>
                <td align="center">性别：</td>
                <td><input type="radio" name="sex" checked value="1">男
                    <input type="radio" name="sex" value="0">女</td>
            </tr>

            <tr>
                <td align="center">电话：</td>
                <td><input type="tel" name="tel" value="<?php echo $data['tel']; ?>"></td>
            </tr>

            <tr>
                <td align="center">邮箱：</td>
                <td><input type="email" name="email" value="<?php echo $data['email']; ?>"></td>
            </tr>

            <tr>
                <td align="center">介绍：</td>
                <td><textarea name="content"><?php echo $data['content']; ?></textarea></td>
            </tr>
            <tr align="center">
                <td colspan="2"> <input id="btnsub" type="submit" value="修改" width="155px"/></td>
            </tr>
        </table>


    </form>
</div>
</body>
</html>