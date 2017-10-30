<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 11:06
 */

/***
 * 表单
 */


echo $_POST['username'].'----'.$_GET['pwd'];

echo '<br/>'.$_GET['name'].'----'.$_GET['pwd'];

echo '<hr/>';
echo $_GET['username'];
echo $_GET['email'];

echo '<hr/>';
//$_REQUEST:post get cookie

echo $_REQUEST['test'];

//php_errormsg--->得到前一个错误信息
$var=1;
echo @settype($var,'k');//Warning: settype():
echo $php_errormsg;//settype(): Invalid type
echo @(3/0).'<br/>';
echo $php_errormsg;//Division by zero
echo '<br/>';

/***
 * 异常处理
 *
 */

try{
    $error='数据库连接失败';
    throw new Exception($error);
    echo '永远不会执行';
}catch (Exception $e){
    echo '捕获到：'.$e->getMessage().'<br/>';
}

echo '从这里开始执行<br/>';


/***
 * 99chengfa
 */

for($i=1;$i<=9;$i++)
{
    for ($j=1;$j<=$i;$j++)
    {
        echo $i.' * '.$j.' = '.$i*$j.'  ';
    }
    echo '<br/>';
}

$nub=2666.132;
echo number_format($nub).'<br/>';//2666
echo number_format($nub,2)."<br/>";//2666.13

//分割字符串
$str="aaa,b,c,d";
$str_arr=explode(',', $str);
print_r($str_arr);

/***
 * 字符串和HTML转换
 */

$a='<h1>看法</h1>';
echo '<br/>'.htmlentities($a);//html代码
echo '<br/>'.$a;


echo  '<br/>'.$_GET['p'];








