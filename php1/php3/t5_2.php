<?php

/*****
 * 1：第一个文件有命名空间，第二个没有（t5_3.php）
 */

/*
namespace bj;
function getInfo(){
    echo "<br>noe1";
}

//const USER="admin";

//公共空间
include("./t5_3.php");

getInfo();//当前空间  noe1

echo "<br>";

echo \USER;// 访问t5_3.php 公共文件

\getInfo();//noe2

echo "<br>";
//先在当前空间找，找不到，再去公共空间
echo USER;//当前空间有，就访问当前空间，测试把当前空间 第8行打开


*/

/*****
 * 2：第二个文件有命名空间，第一个没有
 */
//公共空间
function getInfo(){
    echo "<br>noe1";
}

const USER="admin";

//命名空间
include("./t5_3.php");

getInfo();//当前空间  noe1
\getInfo();// noe1

echo "<br>";
echo USER;//admin
echo "<br>";
echo \USER;//admin  推荐使用  知道其位置

/***
 * 相同请求的多个文件的同命名空间，不能有同名元素
 */
