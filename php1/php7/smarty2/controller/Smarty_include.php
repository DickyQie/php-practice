<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7
 * Time: 18:34
 */
require_once("../libs/Smarty.class.php");
$samrty=new Smarty();
$samrty->template_dir="../templates/";
$samrty->compile_dir="../templates_c/";
$samrty->left_delimiter="<{";
$samrty->right_delimiter="}>";