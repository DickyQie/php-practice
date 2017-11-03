<?php

/***
 * Cookie打开0
 */
echo "<h1>购物大厅</h1>";
echo "<a href='shopProcess.php?bookid=sn1&bookname=天龙八部'>天龙八部</a><br>";
echo "<a href='shopProcess.php?bookid=sn2&bookname=红楼梦'>红楼梦</a><br>";
echo "<a href='shopProcess.php?bookid=sn3&bookname=西游记'>西游记</a><br>";
echo "<a href='shopProcess.php?bookid=sn4&bookname=理我'>理我</a><br>";
echo "<hr>";
echo "<a href='ShowCall.php'>查看购买到的商品</a><br>";

/***
 * Cookie关闭1
 * 在每个超链接后面加上一个sessionid
 * 在每个界面判断sessionid不存在就设置超链接传过来的sessionid
 */

/*
if(isset($_GET["sessionid"])){
    session_id($_GET['sessionid']);
}
session_start();
$id=session_id();


echo "sid===".$id."<br>";
echo "sid===".SID;//PHPSESSID=76tjq5fnpclebj92dgc7r9sco7


echo "<h1>购物大厅</h1>";
echo "<a href='shopProcess.php?bookid=sn1&bookname=天龙八部&sessionid=$id'>天龙八部</a><br>";
echo "<a href='shopProcess.php?bookid=sn2&bookname=红楼梦&sessionid=$id'>红楼梦</a><br>";
echo "<a href='shopProcess.php?bookid=sn3&bookname=西游记&sessionid=$id'>西游记</a><br>";
echo "<a href='shopProcess.php?bookid=sn4&bookname=理我&sessionid=$id'>理我</a><br>";
echo "<hr>";
echo "<a href='ShowCall.php?sessionid=$id'>查看购买到的商品</a><br>";

*/
/***
 * Cookie关闭2
 * 使用常量SID
 * 在超链接  Location，heander() 直接拼接常量SID
 * 在每个界面判断sessionid不存在就设置超链接传过来的PHPSESSID
 */

//PHPSESSID 固定
/*if(isset($_GET["PHPSESSID"])){
    session_id($_GET['PHPSESSID']);
}
session_start();
$id=session_id();


echo "sid===".SID;//PHPSESSID=76tjq5fnpclebj92dgc7r9sco7


echo "<h1>购物大厅</h1>";
echo "<a href='shopProcess.php?bookid=sn1&bookname=天龙八部&".SID."'>天龙八部</a><br>";
echo "<a href='shopProcess.php?bookid=sn2&bookname=红楼梦&".SID."'>红楼梦</a><br>";
echo "<a href='shopProcess.php?bookid=sn3&bookname=西游记&".SID."'>西游记</a><br>";
echo "<a href='shopProcess.php?bookid=sn4&bookname=理我&".SID."'>理我</a><br>";
echo "<hr>";
echo "<a href='ShowCall.php?".SID."'>查看购买到的商品</a><br>";*/


/***
 * Cookie关闭3
 * php.ini中（启用透明SID）
 * session.use_trans_sid=0  设为1 则
 * 超链接和Location  JS不能带SID（ 参考Cookie关闭2）
 *
 */


//Cookie关闭=====URL重写
//echo "<a href='shopProcess.php?bookid=sn4&bookname=理我'>理我</a><br>";