<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/1
 * Time: 16:36
 */
/****
 * 正则表达式
 * 了解
 *
 * 一般用JS验证
 */
$tel="0432-9966322";
$exnd='/\d{3,4}-?\d{7,8}/';
$am=preg_match($exnd,$tel);
echo $am."<br>";//成功1 失败0
$num=preg_match_all($exnd,$tel,$str);
echo $num."<br>";
var_dump($str);
echo "<br>";

$arr=array("012312345678","1236-1234568","12345678");
$preg=preg_grep($exnd,$arr);
var_dump($preg);

//
$str="1234asdfdas;asdfdsaf;5555 dsaf;";
$pattern="/\\d\\d\\d\\d/i";
$renStr=preg_replace($pattern," zhangqie ",$str);
echo "<br>".$renStr;


