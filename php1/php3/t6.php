<?php
/**
 * 面向对象
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 20:24
 */

class P1{
    function header(){
        echo 1;
    }
    function body(){
        echo "2";
    }
    function footer(){
        echo "3";
    }
    function show(){
        $this->header();
        $this->body();
        $this->footer();
    }
}

class P2 extends P1{

    function body(){
        echo '22222';
    }
}
//1222223

$a=new P2();
$a->show();

class p{
    function getname(){
        echo static::$name;
    }
}

class S1 extends p{
    static $name='01';
    const V='a';
}

class S2 extends p{
    public $username="姓名";
    public $abli="能力";
    public $age=18;
    function say(){
        echo "方法<br/>";
    }

    static $name='02';
    const V='b';
}

echo '<br/>';
$s1=new S1();
$s1->getname();

echo "<br/>";
$s2=new S2();
$s2->getname();

$s2->username='张三丰';
$str=serialize($s2);

echo '<br/>'.$str.'<br/>';
$str2=unserialize($str);
print_r($str2);








