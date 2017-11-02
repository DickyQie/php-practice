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
 */

require_once('SQLHelper.class.php');
$sqlHlper=new SQLHelper();
$sql="select * from emp limit 0,3";
$arr=$sqlHlper->execute_sql2($sql);
print_r($arr);