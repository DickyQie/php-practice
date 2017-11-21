<?php

/*
 * define('name',value); 不考虑命名空间  声明多个报错
 *const name=value;针对命名空间
*/


namespace banji1;
//define("host",'localhost');
const a="localhost";
function getInfo(){
    echo "<br>mm";
}
class Studio{
    const aaa="<br>aa";
    function getMN(){
        echo "<br>Studio引入的";
    }
}

function getInfon(){
    echo "<br>引入的";
}

namespace banji2\cy;
function getInfo(){
    echo "<br>bb";
}

namespace banji2;
define("host",'127.0.0.1');
const a="localhost";
function getInfo(){
    echo "<br>nn";
}

/***
 * 当前空间下的 Studio
 */
class Studio{
    const aaa="<br>aa";
    function getMN(){
        echo "<br>当前空间下的Studio";
    }
}



/***
 * Cannot redeclare banji1\getInfo()
 * 方法名重复
 * Constant host already defined  （define在不同命名空间下没影响，要报错）
 * host 常量重复  define 有影响  (const定义的常量没影响，与命名空间有影响，相同不会报错)
 */

/***
 * 命名空间访问的三种方式
 */
getInfo();//没有命名空间，默认访问当前空间（上面挨着最近的空间）//nn  非限定名称

\banji1\getInfo();//完全限定名称  （绝对路径）

// Call to undefined function banji2\banji1\getInfo() in
//banji1\getInfo(); 限定名称  相对路径  相对于在bangji2下了开始访问了

cy\getInfo();//相当于banji2/cy/


echo "<hr/>";
/****
 * 引入空间
 */

//在当前空间映入其他的空间，即可直接访问 他的元素
use banji1;
$s=new banji1\Studio();
$s->getMN();
echo $s::aaa;
banji1\getInfon();


//多个直接引用(命名空间/.../元素)，直接引入到元素，前提必须是类， 当前下面没有Studio 可以使用  使用时  39行下关闭
/*use banji1\Studio;
$m=new Studio();
$m->getMN();*/

/***
 * 当前下面有Studio  使用时  39行开启
 * 别名使用
 */
use banji1\Studio as asn;
$m=new asn();
$m->getMN();




