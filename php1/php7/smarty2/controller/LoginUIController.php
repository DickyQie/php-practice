<?php
/**
 *静态界面也可以做模板文件
 */

require_once("../libs/Smarty.class.php");

$samrty=new Smarty();
$samrty->template_dir="../templates/";
$samrty->compile_dir="../templates_c/";
$samrty->left_delimiter="<{";
$samrty->right_delimiter="}>";
$samrty->display("login.html");
//$samrty->display("login.tpl");
