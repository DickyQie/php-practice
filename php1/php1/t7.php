<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 9:26
 */

/***
 * w(0~6)
 * 设置时区
 * 函数设置
 * date_default_timezone_get():得到当前的默认时区
 * date_default_timezone_set($timezone):设置时区
 * PRC：中华人民共和国
 * Asia/Shanghai
 * Asia/Chongqing
 * 针对当前脚本
 * 配置文件设置(针对所有脚本) 也可以脚本重新设置
 * php配置文件
 * php.ini的date.timezone=Asia/Shanghai
 *重启服务器
 *
 *ini_get('date.timezone');//得到
 *ini_set('date.timezone','PRC')//设置
 */
echo @date_default_timezone_get();
echo "<br/>";
date_default_timezone_set('PRC');
echo date_default_timezone_get();
echo "<br/>";
echo '<br/>'.date('Y年m月d日 H:i:s  星期w');
echo '<br/>'.time().'<br/>';////1970到现在的时间差
echo date("Y/m/d H:i:s",time()).'<br/>';
echo date("Y/m/d H:i:s",time()+24*3600).'<br/>';//加一天的时间


/***
 * include_once require_once
 * 文件只会被包含一次。 include_once 't5.php'; 则啥都没有
 * \
 * include require 可以多次
 *
 */

echo '<hr/>includes<br/>';

include 't5.php';

echo '<hr/>';
include_once 't5.php';//只会被包含一次
require 't4.php';
echo '<hr/>';
require_once 't4.php';


/***
 * 引用文件
 */
/**
 *
 *include
 *
 *include_code(导入前检测文件是否在该界面被引用，有责不会重复引用该文件，程序只引用一次)
 *第二次则报错（产生警告）
 */

/****
 *require
 *
 * require_code(导入前检测文件是否在该界面被引用，有责不会重复引用该文件，程序只引用一次)
 * 第二个不会执行
 * zhi
 */

/***
 * include与require区别
 * 访问文件没找到require：输出错误信息并立即终止脚本的处理，
 * include：输出警告，不会终止脚本处理
 *
 */
/***
 * include_code和require_code
 * include_code:发生错误时，产生警告
 * require_code:致命错误
 *
 */








