<?php

session_start();
if(!empty($_SESSION['view'])){
    echo  $_SESSION['view'];
}else{
    echo "没有了";
}
session_destroy();

/****
 * 在session_start();执行时就已经创建了，但是null的
 * 为会话服务
 *
 * 网站安全退出，要点击，会有很多操作
 * 没有删除Session
 *
 * 多个session_start();只会对应一个session文件；同一个会话中（浏览器一个窗体）
 *
 * 重新打开时又会重新创建一个session文件，所以少打开session；（造成卡顿）
 *
 *
 * 多个界面共享文件（大网站），原因？不同网站不一样
 * 创建session文件时会创建一个Cookie，以session文件名作为名称，当第二个或其他个界面访问时，
 * 会根据你当前的session文件名称(session_id)去获取Cookie；同一个浏览器打开其他界面则把
 * session_id以Cookie带过去，然后使用。
 * 一个session文件为一个会话服务。
 *
 */