<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/31
 * Time: 20:38
 */

/***
 * Session 会话
 * 打开和关闭浏览器的瞬间
 */
$time=20;//设置时间
session_set_cookie_params($time);
session_start();//创建会话

$_SESSION['view']='zhangqie';

echo $_SESSION['view'].'<br/>';



if(isset($_SESSION['num'])){
    $_SESSION['num']=$_SESSION['num']+1;
}else{
    $_SESSION['num']=1;
}

echo "浏览量".$_SESSION['num'];
echo "<br/>";

$array=array('PHP1','PHP2');
$_SESSION['book']=$array;

foreach ($_SESSION['book'] as $key=>$value)
{
    echo  $value.'<br/>';
}

//删除会话
//删除单个
//unset($_SESSION['num']);

//主要所有会话变量
//$_SESSION=array();
//echo $_SESSION['view'].'<br/>'; //Undefined

//结束当前会话
//session_destroy();






