<?php
/**
 * Smarty封装
 */

require_once("../libs/Smarty.class.php");

$smarty=new Smarty();

//根据具体情况来指定模板目录
$smarty->template_dir="../templates/";
//重新指定编译目录
$smarty->compile_dir="../templates_c/";

$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";