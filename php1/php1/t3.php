<?php

/***
 * 检测数据类型
 * is_(bool string int/integer null array float/double object )
 * 返回true false
 * is_string($var);
 * is_numeric 是否由数字或数字的字符
 */

$b=123;
if (is_numeric($b)){
    echo "yes";
}else{
    echo 'no';
}

echo "<br/>";


/***
 *
 * 数组：数值数组 关联数组 多维数组
 *
sort() - 对数组进行升序排列
rsort() - 对数组进行降序排列
asort() - 根据关联数组的值，对数组进行升序排列
ksort() - 根据关联数组的键，对数组进行升序排列
arsort() - 根据关联数组的值，对数组进行降序排列
krsort() - 根据关联数组的键，对数组进行降序排列

 */

$array=array('a','b');
echo $array[0].'<br/>';
$array =[
  'foo' => 'zhangqie',
  'bar' => '19'
];

echo $array['foo'].'<br/>';

$a= array(1 => 'b', 2 => 'c', 3=> 'a');
var_dump($a);
echo "<br/>".$a[2]."<br/>";
sort($a);//元素按照字母升序排列
echo print_r($a),"<br/>";//Array ( [0] => aa [1] => bb [2] => ccc ) 1
//反向排序
rsort($a);
print_r($a);
echo '<br/>随机排列';
shuffle($a);
print_r($a);
$b=array("a"=>'aaa');
$c=array("b"=>'bbb',"c"=>"ccc");
$d=array_merge($b,$c);
echo '<br/>合并数组';
print_r($d);





echo"<hr>";




/***
 *
 *变量
 *常量
 *
 */
$a = 1;
$b = 2;

function test(){
    //echo $a;//不会有任何输出   Undefined
    global $b;
    //global 关键字用于函数内访问全局变量。
    echo $b;//2

    $GLOBALS['b'] =$GLOBALS['a'] + $GLOBALS['b'];
    //$GLOBALS 是一个关联数组，每一个变量为一个元素，键名对应变量名，值对应变量的内容。
    //$GLOBALS 之所以在全局范围内存在，是因为 $GLOBALS 是一个超全局变量。

}

test();
echo "<br/>".$b;//3
echo "<br/>";

/****
 * static
 * 当一个函数完成时，他的变量都会被删除，
 * 可以用static来让他不能删除
 *
 */

function show1(){
    static $abc= 0;
    $abc++;
    echo $abc."<br/>";
}

for($i=0; $i<3; $i++){
    show1();//1 2 3
    //去掉static时：1 1 1
}

/***
 * 常量
 */

//系统常量
echo PHP_VERSION+"-----";
echo PHP_OS."<br/>";

//自定义常量
//1:define('name','content','true/false(区分大小写)')
define('NAME','zhangqie',true);//常量不区分大小写
echo name."<br/>"; //zhangqie
echo NAME."<br/>";  //zhangqie

define('a',"abc");
echo a."<br>"; //abc
echo A; ///undefined
define('a', 'ccc');//常量已定义不能改变
echo a."<br/>";//abc

echo constant('name').'<br/>';//zhangqie

//检测常量是否被定义
var_dump(defined('NAME'),defined('AAA'));

echo '<hr color=blue/>';
//通过const定义常量
const ROOT='hello wrold';
echo ROOT, "==",constant('ROOT');
echo '<br/>';

//预定义常量（魔术）
echo __LINE__."<br/>";//当前行号
echo __FILE__;//当前路径

//产生随机数
echo "<br/>".mt_rand(1000, 9999);
echo '<br/>';
echo '<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0,255).','.mt_rand(0, 255).')">'.mt_rand(1000, 9999).'</span>';
echo "<br/>";
echo '<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0,255).','.mt_rand(0, 255).')">'.mt_rand(0, 9).'</span>';
echo '<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0,255).','.mt_rand(0, 255).')">'.mt_rand(0, 9).'</span>';
echo '<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0,255).','.mt_rand(0, 255).')">'.mt_rand(0, 9).'</span>';
echo '<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0,255).','.mt_rand(0, 255).')">'.mt_rand(0, 9).'</span>';


echo "<br/>";















