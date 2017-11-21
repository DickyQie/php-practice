<?php
/**
 * 处理信息分页查询
 *
 */
require_once("Smarty_include.php");
require_once("../model/MessageModel.class.php");
require_once("../model/FonyPage.class.php");
session_start();

$fengyePage=new FonyPage();

if(!empty($_GET["pageNow"])){
    $fengyePage->pageNow=$_GET["pageNow"];
}else{
    $fengyePage->pageNow=1;
}

$msg=new MessageModel();
$msg->showFenYeMessage($fengyePage,$_SESSION["login"]);

$samrty->assign("res",$fengyePage->res_array);
$samrty->assign("navi",$fengyePage->navigate);
$samrty->assign("pagecount",$fengyePage->pageCount);

$samrty->display("messageList.tpl");