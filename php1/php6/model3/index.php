<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/2
 * Time: 10:00
 *
 * 该版本是  分层模式的  封装
 * 分页1，2模式封装
 *
 * MVC模式 删除
 * 有点：大型项目
 * 缺点：调试难度增加
 *
 * 调试可以新建一个类来调试  大型项目中的Service中的类
 *
 *

 *MySQL 控制台
 Enter password: ******

mysql> use happy
Database changed
mysql> desc admin;
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| id       | int(2)      | NO   | PRI | NULL    | auto_increment |
| name     | varchar(25) | NO   |     | NULL    |                |
| password | varchar(50) | NO   |     | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)

mysql> select * from admin;
+----+----------+----------------------------------+
| id | name     | password                         |
+----+----------+----------------------------------+
|  1 | zhangqie | e10adc3949ba59abbe56e057f20f883e |
|  2 | admin    | e10adc3949ba59abbe56e057f20f883e |
+----+----------+----------------------------------+
2 rows in set (0.00 sec)

update emp set email='zq@qq.com' where id=33;

insert into emp(name,gade,email,salary) values("中国",2,'zm@qq.com',123);

delete from emp where id=33;

 show tables;  查看表
mysql>
 *
 *
 *
 */

require_once('SQLHelper.class.php');
$sqlHlper=new Foo\SQLHelper();
$sql="select * from emp limit 0,3";
$arr=$sqlHlper->execute_sql2($sql);
print_r($arr);