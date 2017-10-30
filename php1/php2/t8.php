<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 16:38
 */


/****
 * file_put_contents($filename,$data)
 * 向指定文件写入内容，如果文件不存在则创建(当前目录)，存在则清空之前内容在写入
 */
$filename="message.txt";
$data=array('a','b','c');
file_put_contents($filename,$data);

/***
 * serialize($value):返回序列化之后的字符串
 */
echo serialize($data);

/**
 * unserialize($value):将序列化字符的值反序列化
 */
echo "<br/>",print_r(unserialize('a:3:{i:0;s:1:"a";i:1;s:1:"b";i:2;s:1:"c";}'));





