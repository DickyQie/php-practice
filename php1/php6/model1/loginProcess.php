<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/1
 * Time: 17:48
 */

/***
 * 接收信息
 */

$id=$_POST["userid"];
$pwd=$_POST["pwd"];

$conn=mysql_connect("localhost","root","123456");
if(!$conn){
    echo "数据库连接失败".mysql_errno();
}else{
    mysql_query("set names utf8",$conn) or die(mysql_errno());
    //选择数据库
    mysql_select_db("happy",$conn) or die(mysql_errno());

    //错误写法
    //$sql="select * from admin where name=$id and password=$pwd";
    //防止SQL注入
    $sql="select * from admin WHERE name='$id'";
    $res=mysql_query($sql,$conn);
   if($row=mysql_fetch_assoc($res)){
       if($row['password']==md5($pwd)){
          // echo $row['name'].'----'.$row['password'];
           $name=$row['name'];
           header("Location:empManage.php?name=$name");
           exit();
       }else{
           header("Location:login.php?error=1");
           exit();
       }
   }else{
       header("Location:login.php?error=1");
       exit();
   }
    //关闭资源
    mysql_free_result($res);
    mysql_close();
}




//简单本地验证
/*if($id=="zhangqie" && $pwd=="123456"){
    header("Location:empManage.php");
    //如果要跳转后，最好exit();
    exit();
}else{
    header("Location:login.php?error=1");
    exit();
}*/