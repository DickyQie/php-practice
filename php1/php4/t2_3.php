<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/3
 * Time: 20:12
 *
 * 测试创建
 *
 */
session_start();

echo "sessionid:".session_id();

echo "sessionname".session_name();



/****
 * Session和Cookie在php.ini中的配置
 * session.name可修改
 *session.use_trans_sid：默认是0 ，改变对安全有影响
 * session.save_path:  session的文件放置目录
 *
 *
 * //session垃圾回收机制 下面三个来决定
 * session.gc_maxlifetime=1440  默认保存时间  发呆时间
 * session.gc_probability=1
 * session_gc_divisor=1000
 * 1/1000 会清除一次(删除一个文件，当前的文件不删除)
 *
 * 启动session_start()时执行 session.gc_probability /  session_gc_divisor
 * 当用户访问多时，概率增加。
 * 当时大型网站是，是把概率增大。
 *
 *
 *
 * session.cookie_lifetime: 该设置可以指定Cookie默认生命周期，默认0
 * 表示浏览器关闭，该Cookie失效
 *
 *
 * 了解：
 * 自定义会话处理器
 * session的各个操作，都可以用自定义会话处理器来决定，
 * session_set_save_handler(); 有六个回调函数（“open close read  write destroy gc”）
 * session的各个操作是可以修改的
 * 可以更改头文件
 *
 * 存文件
 * 存内存  memcache
 * 存数据库
 * 存网络文件  nfs  存在网络上
 *
 *
 * session和Cookie对比
 * 安全性：session安全一点
 * 生命周期：Cookie时间固定，Session间隔的
 *
 *
 */

echo "<br>session.name:====".session_name();


