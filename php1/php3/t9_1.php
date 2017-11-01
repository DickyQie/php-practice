<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/31
 * Time: 8:28
 */

function __autoload($class_name){
    require_once $class_name.'.php';
}

$t7=new T7();
$t7->sql();
