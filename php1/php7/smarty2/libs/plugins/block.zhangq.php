<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7
 * Time: 11:18
 */

function smarty_block_zhangq($arr, $con, &$smarty){
    $str="";
    for($i=0;$i<$arr['size'];$i++){
        $str.="<font color='".$arr['color']."'>".$con."</font><br>";
    }
    return $str;
}