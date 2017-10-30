<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 21:15
 */
namespace A{
    function a(){
        echo 'A<br/>';
    }
    a();
    \B\a();
}

namespace B{
    function a(){
        echo 'B<br/>';
    }
    a();
    \A\a();
    use \PHP\P\A as T;
    $a=new T();
    $a->f();
}

namespace PHP\P{
    class A{
        function f(){
            echo "A的<br/>";
        }
    }
}