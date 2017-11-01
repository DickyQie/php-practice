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

/**
 * 添加
 * 两种格式
 */

//$sql="insert into stu_type(type_id,type_name) values(4,'史记')";
$sql="insert into stu_type VALUES(5,5,'诗词')";
/*$re=mysql_query($sql,$link);
if($re){
    echo "添加成功<br/>";
}*/

/***
 * 修改
 */

//$sql="update stu_type set type_name='漫画' where id=3";
$sql="update stu_type set type_id=11,type_name='漫画' where id=5";
/*$re=mysql_query($sql,$link);
if($re){
    echo "修改成功<br/>";
}*/


/***
 * 删除
 */
$sql="delete from stu_type WHERE id=5";
/*$re=mysql_query($sql,$link);
if($re){
    echo "删除成功<br/>";
}*/


/***
 * 查询
 */

$sql="SELECT * FROM stu_type";
//$sql="SELECT * FROM stu_type WHERE type_name LIKE '%学%'";//模糊查询
$result=mysql_query($sql,$link);
echo "<br/>";

/*
echo "数组模式<br/>";
$info=mysql_fetch_array($result);
do{
    echo $info['type_id']."------".$info['type_name']."<br/>";
}while($info=mysql_fetch_array($result));*/


/*$a3=mysql_fetch_lengths($result);
print_r($a3);*/

/*echo "对象模式<br/>";
while($row=mysql_fetch_object($result)){
    echo $row->type_id.'------'.$row->type_name;
    echo "<br/>";
}*/


/****
 * mysql_fetch_row() 函数逐获取结果集的每条记录
 *
 */
$a2=mysql_fetch_row($result);//返回数组
do{
    echo $a2[0].'---'.$a2[1].'---'.$a2[2];
    echo "<br/>";
}while($a2=mysql_fetch_row($result));


