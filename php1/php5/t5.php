<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/1
 * Time: 15:32
 */
/***
 * 异常处理
 * 异常的规则：如果抛出了异常，就必须捕获它
 */

try{
    $error='数据库连接失败';
    throw new Exception($error);
    echo '永远不会执行';
}catch (Exception $e){
    echo '捕获到：'.$e->getMessage().'<br/>';
}

echo '从这里开始执行<br/>';

function checlNum($num){

    if($num>1){
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

echo checlNum(1);
//echo checlNum(2);

function checkNum($number){
    if($number>1){
        throw new Exception("变量小于1");
    }
    return true;
}

echo "<br>1<br/>";

try{
    checkNum(2);
    // 如果抛出异常，以下文本不会输出
    echo '如果输出该内容，说明 $number 变量';

    // 捕获异常
}catch (Exception $e){
    echo "<br>Messagee".$e->getMessage();
}


class customException extends  Exception{
    public function  errorMessage(){
        $errorMsg="错误行号".$this->getLine()."<br>".$this->getFile().
            ':<b>'.$this->getMessage()."</b>不是一个合法地址";
        return $errorMsg;
    }
}

echo "<br>";
$email="ss@example..com";
try{
    if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
        throw new customException($email);
    }
}catch (customException $e){
    echo $e->errorMessage();
}catch(Exception $e){
    echo $e->getMessage();//其他异常
}