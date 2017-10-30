<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 17:01
 */

/***
 * Cookie:HTTP协议下，将服务器传递给浏览器的少量数据保存到用户浏览器的一种方式
 */
setcookie('TMCookie','PHP',time()+60);//设置Cookie有效时间60秒
//每个站点最多只能20个Cookie

if(!isset($_COOKIE["visit_time"]))
{
    setcookie("visit_time",date("Y-m-d H:i:s"));
    echo "第一次";
}
else
{
    setcookie("visit_time",date("Y-m-d H:i:s"),time()+60);
    echo "上次访问".$_COOKIE["visit_time"].'<br/>';
}

echo "本次反问网站时间为:".date("Y-m-d H:i:s");
