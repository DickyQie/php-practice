<?php
/***
 * smarty 内建函数
 * 不同目录下使用
 */

require_once("smarty_ini.php");

//存放数组,一维数组，一般从数据库取出
//索引数组
$arr1=array("zhangqie","上海",'北京');
//关联数组
$arr2=array('a'=>"zhangqie",'b'=>"上海");
//存二维索引索引数组，这个从数据库取出
$arr3=array(array('北京','上海','天津'),array('小七','董永','玉帝'));
//存二维索引关联数组，这个从数据库取出
$arr4=array(array('a'=>'北京','b'=>'上海','c'=>'天津'),array('a'=>'小七','b'=>'董永','c'=>'玉帝'));

//存二维关联关联数组，这个从数据库取出
$arr5=array('aa'=>array('a'=>'北京','b'=>'上海','c'=>'天津'),'bb'=>array('a'=>'小七','b'=>'董永','c'=>'玉帝'));

//存二维关联索引数组，这个从数据库取出
$arr6=array('aa'=>array('北京','上海','天津'),'bb'=>array('小七','董永','玉帝'));



$smarty->assign("arr1",$arr1);//tpl中数组越界 不会报错  没有数据
$smarty->assign("arr2",$arr2);
$smarty->assign("arr3",$arr3);
$smarty->assign("arr4",$arr4);
$smarty->assign("arr5",$arr5);
$smarty->assign("arr6",$arr6);







$smarty->display("../templates/test2.tpl");