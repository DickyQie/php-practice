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
$id=$_POST["userid"];
$pwd=$_POST["pwd"];

$admin=new AdminService();
if($name=$admin->checkAdmin($id,$pwd)){
    header("Location:empManage.php?name=$name");
    exit();
}else{
    header("Location:login.php?error=1");
    exit();
}
