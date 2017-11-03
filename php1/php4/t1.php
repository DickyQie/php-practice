<?php
/***
 * cookie
 * 设置Cookie参数
 * 用户名，Cookie信息，时间，Cookie在服务器端的有效路径，
 * Cookie有效域名，是否只通过安全的HTTPS，(0或1) 1只通过https  0两者都可以。
 *
 * 生命周期
 * 1：Cookie不设置时间，就表示他的生命周期为浏览器的会话（开启和关闭浏览器）期间，关闭浏览器
 * Cookie就会自动消失，
 * 2：设置了时间，就会存在硬盘下，在规定时间内都有效。
 * 大小：最大4KB
 * 每个域名最大20个Cookie;
 * 多了随机删除。
 *
 *
 * 商城项目
 * 浏览痕迹
 *
 * */

//Cookie==小甜品
setcookie("cookie1",'php',time()+3600);
echo $_COOKIE["cookie1"].'<br/>';//读取Cookie


if(!isset($_COOKIE['visit_time'])){
    setcookie("visit_time",date("Y-m-d H:i:s"));
}else{
    setcookie("visit_time",date("Y-m-d H:i:s"),time()+60);
    echo "上次访问".$_COOKIE["visit_time"].'<br/>';
}

echo "本次访问为：".date("Y-m-d H:i:s");



//没有创建Cookie
if(!isset($_COOKIE['cookie1'])){
    setcookie("cookie1",'php',time()+3600);
}else{
    //删除Cookie  指定删除  删除文件不会删除
    setcookie("cookie1","",time()-1);//清除cookie
}


echo "<br/>".$_COOKIE["cookie1"].'<br/>';


//Cookie 全部删除  用遍历  客户端的Cookie文件删除
/*foreach($_COOKIE as $key=>$val){
    echo $key.'----'.$val;
    setcookie($key,"",time()-1);
}*/

echo "---------------------------<br/>";

if(isset($_COOKIE['time'])){
    echo "你上次访问的时间是".$_COOKIE['time'].'<br/>';
    setcookie('time',date("Y-m-d H:i:s"),time()+3600);//更新
}else{
    echo "你是第一次登录";
    setcookie('time',date("Y-m-d H:i:s",time()+3600));
}
echo "这次的登录时间是".date("Y-m-d H:i:s");

echo "<br/>".urldecode("%E6%98%AF%E7%9A%84");
echo "<br/>".urlencode("是的");





