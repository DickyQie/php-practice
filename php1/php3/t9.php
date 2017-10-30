<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 20:59
 */

/****
 * 命名空间下
 */

namespace DL;

spl_autoload_register('DL\myload');

function myload($clsName){
    echo $clsName.'<br/>';
    include "{$clsName}.php";
}

$conn=new \T7();//跳出当前命名空间下，进入上一级
$conn->sql();