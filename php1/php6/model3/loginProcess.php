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

require_once("AdminService.php");
session_start();
$id=$_POST["userid"];
$pwd=$_POST["pwd"];
$checkcode=$_POST["checkcode"];
//先验证验证码
if(md5($checkcode)!=$_SESSION["verification"]){
    header("Location:login.php?error=2");
    exit;
}

$admin=new AdminService();
if($name=$admin->checkAdmin($id,$pwd)){
    setcookie("empzqtime",date("Y-m-d H:i:s"),time()+3600);//保存一个小时
    if(!empty($_POST['check'])){//是否保存用户名
        setcookie("empzqname",$name,time()+3600);//保存一个小时 //一般保留两个周
    }else{
        if(!empty($_COOKIE['empzqname'])){
            setcookie("empzqname",$name,time()-1);
        }
    }
    $_SESSION["loginuser"]=$name;
    header("Location:empManage.php?name=$name");
    exit();
}else{
    header("Location:login.php?error=1");
    exit();
}
