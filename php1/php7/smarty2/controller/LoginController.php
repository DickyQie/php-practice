<?php
require_once("Smarty_include.php");
require_once("../model/MessageModel.class.php");
require_once("../model/FonyPage.class.php");
/*$emp_name=$_POST['name'];
$emp_pwd=$_POST['pwd'];*/

$emp_name="周星驰";
$emp_pwd="1";



if($emp_name =="周星驰"){
    if($emp_pwd == "1"){

        session_start();
        $_SESSION["login"]=$emp_name;

        //模板显示
        $msg=new MessageModel();
        /* $samrty->assign("res",$msg->showMessage($emp_name));*/

        $fengyePage=new FonyPage();
        $fengyePage->gotoUrl="MessageListControll.php";



        //分页1
       /* if(!empty($_GET["pageNow"])){
            $fengyePage->pageNow=$_GET["pageNow"];
        }*/



        $msg->showFenYeMessage($fengyePage,$emp_name);
 /*       echo "<pre>";
        print_r($fengyePage->res_array);
        echo "</pre>";*/


        $samrty->assign("res",$fengyePage->res_array);
        $samrty->assign("navi",$fengyePage->navigate);
        $samrty->assign("pagecount",$fengyePage->pageCount);
        $samrty->assign("pagecount",$fengyePage->pageCount);


        //模式1  没分页
       //$samrty->display("msg.html");
        //模式2 分页
        $samrty->display("messageList.tpl");
    }else{

    }
}else{

}