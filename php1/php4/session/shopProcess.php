<?php
/****
 * 处理购买
 *
 * 第一种Cookie打开
 *
 * 第二种Cookie关闭时，存一个商品时创建一个Session文件
 * 返回时得不到 ShowCall.php得不到任何信息
 * Cookie  的key不存在
 */


/***
 * Cookie关闭0
 */


$id=$_GET['bookid'];
$name=$_GET['bookname'];
session_start();
//numeric key 1 in Unknown on line 0  键是数字不适合
$_SESSION[$id]=$name;
echo "购买商品采购";
echo "<br><a href='MyHall.php'>返回购物大厅</a> ";



/***
 * Cookie关闭1
 */

/*$id=$_GET['bookid'];
$name=$_GET['bookname'];
$session=$_GET["sessionid"];
if(isset($session)){
    session_id($session);
}
session_start();
$_SESSION[$id]=$name;
echo "购买商品采购";
echo "<br><a href='MyHall.php?sessionid=$session'>返回购物大厅</a> ";*/


/***
 * Cookie关闭2
 */

/*$id=$_GET['bookid'];
$name=$_GET['bookname'];
$session=$_GET["PHPSESSID"];
if(isset($session)){
    session_id($session);
}
session_start();
$_SESSION[$id]=$name;
echo "购买商品采购";
echo "<br><a href='MyHall.php?".SID."'>返回购物大厅</a> ";*/


/***
 * Cookie关闭3
 */