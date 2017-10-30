<?php
namespace Foo\Bar;
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 17:56
 */

include 't4.php';

const FOO=2;
function foo(){
    echo "二级foo".'<br/>';
}

class foo{
    static function staticmethod(){
        echo "222"."<br/>";
    }
}

/* 非限定名称 */
foo();
// 解析为类 Foo\Bar\foo的静态方法staticmethod。resolves to class Foo\Bar\foo,method staticmethod
foo::staticmethod();
echo FOO."<br/>"; // resolves to constant Foo\Bar\FOO


/* 限定名称 */
echo subnamespace\FOO."<br/>";
subnamespace\foo::staticmethod();
subnamespace\foo();

echo "<hr/>";
/*完全限定名称*/
\Foo\Bar\foo();
\Foo\Bar\foo::staticmethod();
echo \Foo\Bar\FOO."<br/>";

\Foo\Bar\subnamespace\foo();
\Foo\Bar\subnamespace\foo::staticmethod();
echo \Foo\Bar\subnamespace\FOO;

