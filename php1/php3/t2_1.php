<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/31
 * Time: 8:40
 */

abstract class AbstractClass{
    abstract protected function prefixName($name);
    function show(){
        echo "抽象类的方法";
    }
}


