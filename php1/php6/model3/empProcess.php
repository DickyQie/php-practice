<?php

/****
 * 控制器
 * 接收请求完成任务，在决定跳转到什么地方去
 *
 * MVC模式
 * 案例 删除
 *
 * 调用EmpService的删除方法
 * C层
 *
 *
 *
 */


require_once("EmpService.class.php");

//接收用户删除的ID

$empService=new EmpService();

//删除
if(!empty($_REQUEST["fang"])){
    $fang=$_REQUEST["fang"];
    if($fang=="delete") {
        $id=$_REQUEST["id"];
        if ($empService->deleteEmpById($id) == 1) {
            //suceess
            header("Location:ok.php");
            exit();
        } else {
            //error
            header("Location:error.php");
            exit();
        }
    }else if($fang=="add"){
        $name=$_POST["name"];
        $gradle=$_POST["gradle"];
        $email=$_POST["email"];
        $salary=$_POST["salary"];
        $res=$empService->addEmpById($name,$gradle,$email,$salary);
        if($res==1){
            header("Location:ok.php");
            exit();
        }else {
            //error
            header("Location:error.php");
            exit();
        }
    }elseif($fang=="update"){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $gradle=$_POST["gradle"];
        $email=$_POST["email"];
        $salary=$_POST["salary"];
        $res=$empService->updateEmpById($id,$name,$gradle,$email,$salary);
        if($res==1){
            header("Location:ok.php");
            exit();
        }else {
            //error
            header("Location:error.php");
            exit();
        }
    }
}





