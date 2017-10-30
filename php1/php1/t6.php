<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/20
 * Time: 17:52
 */

/***
 * 函数
 */

function showname(){
    echo "zhangqie";
}

showname();
echo "<br/>";
//默认参数(默认参数必需放在右侧)
function shownamen($var="zn"){
    echo $var."<br/>";
}
shownamen();
shownamen('胡歌');

function make($type = array('ccc'),$coffee =NULL){
    $device= is_null($coffee) ? "hand" : $coffee;
    return $type[0].'-----'.$device."<br/>";
}

echo make();
echo make(array("a","b"),"teapot");



/***
 * 函数之间传递参数
 * 1：按值传递方式
 * @param unknown $m
 */
function examp($m)
{
    $m=$m*5;
    echo "内$m=".$m;//5==5
}
$m=1;
examp($m);
echo "<br/>外$m=$m";//1=1

function exampn(&$m)
{
    $m=$m*5;
    echo "<br/>内$m=".$m;//5==5
}
$m=1;
exampn($m);
echo "<br/>外$m=$m".'<br/>';



function foo()
{
    function bar()
    {
        echo "<br/>I don't exist until foo() is called.<br/>";
    }
}
/* 现在还不能调用bar()函数，因为它还不存在 */
foo();

/* 现在可以调用bar()函数了，因为foo()函数
 的执行使得bar()函数变为已定义的函数 */
bar();

class Foo{
    static $variable = 'static propertry';
    static function Variable(){
        echo "<br/>This is veriable";
    }
}

echo Foo::$variable;
$variable = "Variable";
Foo::$variable();//This is veriable

$str="123";
echo '<br/>'.isset($str);
if(!empty($str) && isset($str)){
    echo $str;
}

/***
 *exit();终止程序执行
 *die()相同
 */
echo "<br/>";
//exit();
die("game over");
echo "123";

