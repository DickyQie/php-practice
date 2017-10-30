<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 20:49
 */

/***
 * 类自动加载
 * 接口自动加载
 */

spl_autoload_register('myload');

function myload($clsName){
    echo $clsName."<br/>";
    include "{$clsName}.php";
}

$conn=new T7();  //名称必须与引入的内名和文件名相同 (当前的文件名)
$conn->sql();
print_r(get_include_path());
set_include_path(get_include_path().PATH_SEPARATOR.'../php2');

$conn=new tn9();
$conn->sql();




