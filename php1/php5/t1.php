<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/1
 * Time: 15:57
 */
/***
 * Email
 *
 * 网上搜phpmailer第三方发邮件
 */

$email="2635481328@qq.com";
$subject="参数邮件";//标题
$message="Hello! 邮件内容 验证码1234";
$form="me@example.com";//邮件发送者;
$headers="From".$form; // 头部信息设置
mail($email,$message,$headers);
echo "邮件发送成功";

//过滤email  防止 E-mail 注入

$email2="someone@example.com%0ACc:person2@example.com
%0ABcc:person3@example.com,person3@example.com,
anotherperson4@example.com,person5@example.com
%0ABTo:person6@example.com";
if(filter_var($email2, FILTER_VALIDATE_EMAIL)){
    echo "<br>成功";
}else{
    echo "<br>失败";
}

