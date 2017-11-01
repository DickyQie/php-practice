<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 17:54
 */
//命名空间   正对类名 常量  方法

namespace Foo\Bar\subnamespace;

const FOO=1;
function foo(){
    echo "一级foo".'<br/>';
}

class foo{
    static function staticmethod(){
        echo "111<br/>";
    }
}

function bar(){
    echo 'bar';
}






