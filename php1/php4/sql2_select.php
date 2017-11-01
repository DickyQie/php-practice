<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/31
 * Time: 17:08
 *
 * 查询数据
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
$sql="select * from userinfo";
$result=mysql_query($sql,$link);
$data=mysql_fetch_array($result);

/*
do{
    echo $data['username']."------".$data['age']."<br/>";
}while($data=mysql_fetch_array($result));*/

?>
<!DOCTYPE html>
<html>
<head>
    <title>title</title>
    <meta content="text/html" charset=utf-8>
</head>
<body>

<p>个人信息列表

<form method="post">
    <table width="86%" border="1" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4">
        <tr>
            <td align="center">编号</td>
            <td>姓名</td>
            <td>年龄</td>
            <td>性别</td>
            <td>电话</td>
            <td>邮箱</td>
            <td>内容</td>
            <td>操作</td>
        </tr>
        <?php  do{  ?>
            <tr>
                <td align="center"><?php echo $data['id'];?></td>
                <td><?php echo $data['username'];?></td>
                <td><?php echo $data['age'];?></td>
                <td><?php echo $data['sex']==1? '男': "女";?></td>
                <td><?php echo $data['tel'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['content'];?></td>
                <td><a href="sql2_update.php?id=<?php echo $data['id']; ?>" >修改</a>
                    <a href="sql2_dao.php?type=delete&id=<?php echo $data['id']; ?>" >删除</a></td>
            </tr>
        <?php  }while($data=mysql_fetch_array($result));?>

    </table>
</form>



</body>


</html>