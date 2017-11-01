<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/1
 * Time: 15:57
 */

/****
 * 过滤
 */

$int=123;
if(filter_var($int,FILTER_VALIDATE_INT)){
    echo "合法整数";
}else{
    echo("不是合法数字");
}

echo "<br>";
//filter_input  INPUT_GET 获取url参数
//filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);//获取url中email并验证是否合法
$email="zh@qq.com";
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo "不是一个合法的 E-Mail";
}
else
{
    echo "是一个合法的 E-Mail";
}
