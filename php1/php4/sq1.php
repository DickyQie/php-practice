<?php

$link =mysql_connect('localhost','root','123456') or dle('no',mysql_error());
if($link){
    echo "对接成功<br/>";
}

$db_select=mysql_select_db("happy",$link);
if($db_select){
    echo "连接<br/>";
}

mysql_query("set character set 'utf8'");//读库
mysql_query("set names 'utf8");


$result=mysql_query("SELECT * FROM stu_type",$link);
echo "<br/>";
echo "<br/>";
$info=mysql_fetch_array($result);

do{
    echo $info['type_name']."---------";
}while($info=mysql_fetch_array($result));
