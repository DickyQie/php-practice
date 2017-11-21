<?php
/***
 * 分配数据
 */

require_once("./libs/Smarty.class.php");

$smarty=new Smarty();
$smarty->assign("aa","hello");//放字符串
$smarty->assign("bb",123456);//整数
$smarty->assign("cc",12.6);//小数
$smarty->assign("dd",true);//bool true==1  false == 空的

//存放数组,一维数组，一般从数据库取出
//索引数组
$arr1=array("zhangqie","上海",'北京');
//关联数组
$arr2=array('a'=>"zhangqie",'b'=>"上海");
//存二维索引索引数组，这个从数据库取出
$arr3=array(array('北京','上海','天津'),array('小七','董永','玉帝'));
//存二维索引关联数组，这个从数据库取出
$arr4=array(array('a'=>'北京','b'=>'上海','c'=>'天津'),array('a'=>'小七','b'=>'董永','c'=>'玉帝'));

//存二维关联关联数组，这个从数据库取出
$arr5=array('aa'=>array('a'=>'北京','b'=>'上海','c'=>'天津'),'bb'=>array('a'=>'小七','b'=>'董永','c'=>'玉帝'));

//存二维关联索引数组，这个从数据库取出
$arr6=array('aa'=>array('北京','上海','天津'),'bb'=>array('小七','董永','玉帝'));

/***对象分配***/


/***
 * 必须是共有的才能获取
 */
class Master{
    var $name;
    var $address;
}

$master=new Master();
$master->name="张切";
$master->address="贵阳";

class Dog{
    var $name;
    var $age;
    var $color;
    var $arr;
    var $arr2;
    var $master;
    function __construct($name,$age,$color,$arr,$arr2){
        $this->name=$name;
        $this->age=$age;
        $this->color=$color;
        $this->arr=$arr;
        $this->arr2=$arr2;
    }
    function showM(){
        return "调函数";
    }
}

$dog=new Dog("小米",18,"红色",$arr1,$arr4);
$dog->master=$master;




$smarty->assign("arr1",$arr1);//tpl中数组越界 不会报错  没有数据
$smarty->assign("arr2",$arr2);
$smarty->assign("arr3",$arr3);
$smarty->assign("arr4",$arr4);
$smarty->assign("arr5",$arr5);
$smarty->assign("arr6",$arr6);

$smarty->assign("obj",$dog);


/****
 * 配置文件  .ini  .conf
 * 取配置文件  可以相对路径  和绝对路径
 */

/****
 * 取get post  session  server  Cookie
 * 一般做法
 * $username=$_GET['username'];
 * $smarty->assign("name",$username);
 *2:直接得到
 *<p>get:<{$smarty.get.username}></p>
 */









$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";

$smarty->display("test.tpl");