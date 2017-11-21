<?php

function smarty_modifier_ismail($string)
{

    $pattern="/^[a-zA-Z_][a-zA-Z_-]*@[a-zA-Z0-9]+(\\.[a-zA-Z0-9]+)+$/i";
    if(preg_match($pattern,$string)==1){
        return "是合法邮件";
    }else{
        return "不是合法邮件";
    }
}
?>
