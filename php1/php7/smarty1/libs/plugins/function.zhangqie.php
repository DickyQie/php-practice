<?php
/**
 * 自定义函数
 */

function smarty_function_zhangqie($arr, &$smarty){
    $str="";
    for($i=0;$i<$arr['size'];$i++){
        $str.="<font color='".$arr['color']."'>".$arr['con']."</font><br>";
    }
    return $str;
}