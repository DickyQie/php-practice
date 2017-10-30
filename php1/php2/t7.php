<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 16:14
 */

$filename='msg.txt';
if(file_exists($filename) && filesize($filename)>0){
    $sa=file_get_contents($filename);
    $arr=unserialize($sa);
    if(!is_array($arr)){
        echo '数据为空,3秒跳转到添加界面';
    }
}else {
    echo '没有留言,3秒跳转到添加界面';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>title</title>
    <meta content="text/html" charset=utf-8>
</head>
<body>

<p>留言列表

<form action="t9.php" method="post">
    <table width="86%" border="1" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4">
        <tr>
            <td align="center">编号</td>
            <td>标题</td>
            <td>内容</td>
            <td>留言人</td>
            <td>心情</td>
            <td>发布时间</td>
            <td>ip地址</td>
            <td>操作</td>
        </tr>
        <?php $i=1; foreach($arr as $key=>$var):
            ?>
            <tr>
                <td align="center"><?php echo $i;?></td>
                <td><?php echo $var['b'];?></td>
                <td><?php echo $var['c'];?></td>
                <td><?php echo $var['a'];?></td>
                <td><?php echo $var['d'];?></td>
                <td><?php echo @(date("Y-m-d H:i:s",$var['time']));?></td>
                <td><?php echo $var['ip'];?></td>
                <td><a href="t11.php?id=<?php echo $key?>">修改</a>
                    <a href="t6.php?act=delete&id=<?php echo $key;?>" >删除</a></td>
            </tr>
            <?php $i++; endforeach;?>

    </table>
</form>



</body>


</html>
