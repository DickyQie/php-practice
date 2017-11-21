<?php

require_once("Smarty_include.php");
require_once("../model/MessageModel.class.php");

$deid=$_GET['id'];
$messagemodel=new MessageModel();

$idm=$messagemodel->showDelete($deid);
if($idm==1){
    $samrty->display("ok.html");
}else{
    echo "删除失败";
}



