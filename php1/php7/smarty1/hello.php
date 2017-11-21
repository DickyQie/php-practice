<?php

//创建smarty对象
/****
 * smarty 1:复制libs放入项目根目录
 * 2：创建两个文件夹
 * templates：放模板文件，
 * templates_c:自动生成模板和使用模板的结合文件，编译目录
 *
 * 还有一个 cache缓存文件夹 需要创建
 *
 *注意事项：
 * 替换变量的标识分隔符一般使用 {}
 * 当设置 CSS和JavaScript时就会报错
 *
 * 改成{<  >}
 * 改动分隔符的两个方法
 * 1: Smarty.class.php修改
 *
 * var $left_delimiter  =  '<{';
 *
 * var $right_delimiter =  '}>';
 *
 * 2:动态修改
 *$smarty->left_delimiter="<{";
 *$smarty->right_delimiter="}>";
 *
 * 建议使用第二种
 */

require_once("./libs/Smarty.class.php");

$smarty=new Smarty();
$smarty->assign("var1","hello world");
$smarty->assign('firstname', '张切');
$smarty->assign('lastLoginDate', 'January 11th, 2017');

$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";

$smarty->display("hello.tpl");


