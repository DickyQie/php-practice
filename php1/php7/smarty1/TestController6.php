<?php

require_once("./libs/smarty.class.php");
$smarty=new Smarty();
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";

/****
 * 自定义函数
 */

$arr=array(array("id"=>"1",'name'=>"宋江",'nickname'=>"及时雨")
,array("id"=>"2",'name'=>"小鹿",'nickname'=>"玉麒麟")
,array("id"=>"3",'name'=>"吴用",'nickname'=>"智多星")
,array("id"=>"4",'name'=>"王者",'nickname'=>"土木手"));

$smarty->assign("arr",$arr);

$smarty->debugging=true;//火狐打开自动弹出新窗口

$arr2=array("lq"=>"篮球","zq"=>"足球","wq"=>"网球");

$arr3=array("lq","wq");

$arr4=array("a"=>"男","b"=>"女");

//html_table
$arr5=array("aa","bb","cc","dd","ff","ee");




$smarty->assign("arr2",$arr2);
$smarty->assign("arr3",$arr3);
$smarty->assign("arr4",$arr4);
$smarty->assign("arr5",$arr5);

$smarty->display("test6.tpl");
