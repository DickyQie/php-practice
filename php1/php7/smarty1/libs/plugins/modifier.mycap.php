<?php

/****
 * 首字母大写，其余小写
 * @param $string
 * @return string
 */
function smarty_modifier_mycap($string,$str)
{
   return strtoupper(substr($string,0,1)).strtolower(substr($string,1)).$str;
}