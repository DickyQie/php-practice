<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/1
 * Time: 9:08
 *
 *
 * 字母相关介绍
 * http://www.runoob.com/php/php-date.html
 *
 */

//跳转php
//header("Location:t1.php");
/****
 * 时间
 *
 * 使用Cookie 会有时间误区错误
 */

/***
 * 指定时区；两个
 * php.ini   date.timezone =Asia/Chongqing
 * 代码设置  每个使用时间的代码文件都要有
 */
date_default_timezone_set("Asia/Chongqing");


echo date("Y-m-d H:i:s D")."<br>";//星期中的第几天，文本表示，3 个字母
echo date("Y-m-d H:i:s l")."<br>";
echo date("Y-m-d H:i:s 星期N");