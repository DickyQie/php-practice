<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/31
 * Time: 11:48
 */

/***
 * Class Temp
 * 继承抽象类
 */
include "t2_1.php";
class Temp extends AbstractClass{

    public function prefixName($name,$sep='.'){
        if ($name == "zq") {
            $prefix = "zhangqie";
        }else {
            $prefix = "yx";
        }
        echo  "{$prefix}---{$sep}---{$name}<br/>";
    }
}

$ml=new Temp();
$ml->prefixName("zq");
$ml->show();