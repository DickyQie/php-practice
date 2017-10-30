<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 17:03
 */

/***
 * 面向对象
 */

class book{

    public $s="mmm";
    const VS="vn";
    protected $s1="zhangqien";

    function __construct() {
        print "构造函数<br/>";
    }

    /**
     * 析构函数--最后调用
     */
    function __destruct() {
        print "销毁 <br/>";
    }
    /**
     * 内部访问
     * $this  代表当前对象
     */
    function show(){
        echo "<br/>".$this->s;
        echo "<br/>".self::VS;
        echo "<br/>".$this->showstaic();
    }

    function shownet(){
        echo "1";
    }

    static function showstaic(){
        echo "static".'<hr/>';
    }
}
//-> (访问变量和方法)
//:: 静态变量和静态方法
$p= new book();
echo $p->s."<br/>";
echo $p->show();

class Sub extends book{

    var $name;
    function __construct($username){
        $this->name=$username;
       // echo $this->name;
    }

    function getName(){
        return $this->name;
    }

    function shown(){
        echo "<br/>".$this->s;
        echo "<br/>".$this->s1;
    }
    function shownet(){
        echo "111";
    }

    static function showstaic(){
        echo "子类";
    }
    function get(){
        self::showstaic();
        //parent表示父类
        parent::showstaic();
    }

}

$n=new Sub("zhangqie");
echo $n->name."-----{$n->getName()}<br/>";
$n->shown();
$n->shownet();//111
echo "<br/>";
echo book::VS."---";
echo book::showstaic();//$n->showstaic()  都可以访问
echo "<br/>";

echo $n->get();



