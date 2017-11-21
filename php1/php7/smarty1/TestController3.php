<?php
/***
 * 自定义函数
 */

require_once("./libs/Smarty.class.php");

$smarty=new Smarty();

function test($arr){
    $str="";
    for($i=0;$i<$arr['size'];$i++){
        $str.="<font color='".$arr['color']."'>".$arr['con']."</font><br>";
    }
    return $str;
}

/***
 * @return string块方式
 */
function test2($arr,$con){
    $str="";
    for($i=0;$i<$arr['size'];$i++){
        $str.="<font color='".$arr['color']."'>".$con."</font><br>";
    }
    return $str;
}

function test3($arr){
    $str="";
    switch($arr["oper"]){
        case "+":
            $str="<p>".$arr["num1"].$arr["oper"].$arr["num2"]."=".($arr["num1"]+$arr["num2"])."</p>";
            break;
        case "-":
            $str="<p>".$arr["num1"].$arr["oper"].$arr["num2"]."=".($arr["num1"]-$arr["num2"])."</p>";
            break;
        case "*":
            $str="<p>".$arr["num1"].$arr["oper"].$arr["num2"]."=".($arr["num1"]*$arr["num2"])."</p>";
            break;
        case "/":
            $str="<p>".$arr["num1"].$arr["oper"].$arr["num2"]."=".($arr["num1"]/$arr["num2"])."</p>";
            break;
    }
    return $str;
}

$smarty->register_function("zq","test");

//换方式调用

$smarty->register_block("fun1","test2");


$smarty->register_function("jisuan","test3");

/****
 *:1：libs 下的plugins  写插件函数
 * 文件名格式function.自定义函数名.php
 *
 * 函数名字格式
 * function smarty_function_函数名($params, &$smarty){
 *   写代码
 * }
 *
 * 注册不需要
 *
 * 案例在：function_zhangqie.php下
 *
 * 2：以块的函数，写插件
 * 文件名格式block.块名.php
 *
 * 函数名字格式
 * function smarty_block_块函数名($params, $content, &$smarty){
 *   写代码
 * }
 */





$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";

$smarty->display("test3.tpl");