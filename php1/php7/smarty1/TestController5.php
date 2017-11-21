<?php

require_once("./libs/smarty.class.php");
$smarty=new Smarty();
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";

$arr=array("北京","上海","天津1");
$smarty->assign("a",$arr);


/***
 * 设置缓存30秒不变
 * 30秒后自动缓存新数据
 * 新闻每隔几分钟刷新一下
 * 缓存效率高，Html 的编译比PHP文件快
 */
/*$smarty->cache_lifetime=30;
$smarty->caching=true;*/

//清除缓存
//$smarty->clear_cache('test5.tpl');

/****
 * 局部缓存
 * 一个界面分开缓存
 */

/**
 * section
 */
$arr1=array("深圳","上海",'北京',"杭州");
$arr2=array(array('a'=>'北京','b'=>'上海'),array('a'=>'小七','b'=>'董永'),array('a'=>'小骨','b'=>'白子画',));
$smarty->assign("arr1",$arr1);
$smarty->assign("arr2",$arr2);





$smarty->display("test5.tpl");
