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
 */


echo date("Y-m-d H:i:s D")."<br>";//星期中的第几天，文本表示，3 个字母
echo date("Y-m-d H:i:s l")."<br>";
echo date("Y-m-d H:i:s 星期N");