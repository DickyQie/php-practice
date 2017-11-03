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
 *
 * 登录一个网站  可以在任何界面查看用户名
 *
 * php.ini
 * 可以修改session文件保存的路径，修改之后重新启动Apache
 * 保存路径：session.save_path="D:\Android\Storm\xampp\tmp"
 * （所有基本数据类型）
 * 保存格式：view|s:8:"zhangqie";num|i:3;book|a:2:{i:0;s:4:"PHP1";i:1;s:4:"PHP2";}
 *
 *
 * session_start();可以不用，在php.ini中设置，   session.auto_start=1  但是会影响效率(不推荐)
 *
 * session保存默认24分钟
 * 时间 执行时 内容在变时间重置；
 *
 */
$time=60;//设置时间
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
//unset($_SESSION['num']);//释放给定的变量

//主要所有会话变量
//$_SESSION=array();
//echo $_SESSION['view'].'<br/>'; //Undefined

//销毁一个会话中的全部数据
//session_destroy();


/****
 * 可使用单独建类
 * 用require_once;
 * 便于共享
 */
/*class Dog{
    private $name;
    private $age;
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    function showName(){
        return $this->name;
    }
}*/
require_once("Dog.class.php");
$dog=new Dog("小狗",12);
$_SESSION['dog']=$dog;
$dog2=$_SESSION['dog'];
echo $dog2->showName();



//更新session
$_SESSION['view']='我的Like';

echo "<br/>".$_SESSION['view'].'<br/>';






