<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 15:13
 */
/***
 *字母
 *ASCII
 *a-z:97---122
 *A-Z:65-90
 */

echo ord('aing').'<br/>';//97
/***
 * 将ASCII转化字母
 */
echo chr('97').'<br/>';//a

$str='<h1>this is h1</h1>';
echo strip_tags($str).'<br/>';//去掉html标记

/****
 * 转化大小写
 * strtolower 小写
 * strtoupper 大写
 *
 */

$string="heLLo";
echo strtolower($string),'===',strtoupper($string).'<br/>';

$string='  bbbb  ';
echo '!'.$string.'!<br/>';
echo trim($string).'<br/>';

//过滤
$str='abca';
echo trim($str,'a').'<br/>';//bc
echo ltrim($str,'a').'<br/>';//bca
echo rtrim($str,'a').'<br/>';//abc


/****
 *MD5： 加密(md5)返回32位字符串长度
 *sha1 返回40位字符串长度
 */
echo md5('').'<br/>';
echo sha1('').'<br/>';

/***
 * 二维数组
 */

$var=array(
    array(1,1),
    array(2,2)
);
print_r($var);
echo "<br/>";
$vars=array(
    'user'=>array('zhang','li'),
    'age'=>array('19','18')
);
print_r($vars);
echo '<br/>'.$vars['user'][0];

echo '<pre>';
$var=array(1,2,'a'=>'张切','age'=>22,"zz");
print_r($var);
echo '<br/>';
foreach($var as $key=>$val):
    echo '键名:'.$key.'==键值:'.$val.'<br/>';
endforeach;


