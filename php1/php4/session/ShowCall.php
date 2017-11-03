<?php
/***
 * 显示购物车
 */



/***
 * Cookie关闭0
 */
session_start();
echo "<h1>购物车商品</h1>";
print_r($_SESSION);
foreach($_SESSION as $key=>$val){
    echo "<br>书号----- $key     书名------ $val";
}


/***
 * Cookie关闭1
 */


/*if(isset($_GET["sessionid"])){
    session_id($_GET['sessionid']);
}
session_start();//判断是否这是ID，设置了就不创建
print_r($_SESSION);
foreach($_SESSION as $key=>$val){
    echo "<br>书号----- $key     书名------ $val";
}*/

/***
 * Cookie关闭2
 */
/*if(isset($_GET["PHPSESSID"])){
    session_id($_GET['PHPSESSID']);
}
session_start();//判断是否这是ID，设置了就不创建
print_r($_SESSION);
foreach($_SESSION as $key=>$val){
    echo "<br>书号----- $key     书名------ $val";
}*/


/***
 * Cookie关闭3
 */