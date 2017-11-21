<?php
/**
 * Created by PhpStorm.
 * User: zhnagqie
 * Date: 2017/11/7
 * Time: 8:37
 *
 * JSON
 *
 */

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => '张切');
echo json_encode($arr)."<br/>";//Json字符串

/****
 * son_string: 待解码的 JSON 字符串，必须是 UTF-8 编码数据
 * assoc: 当该参数为 TRUE 时，将返回数组，FALSE 时返回对象。
 */
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json));
echo "<br>";
var_dump(json_decode($json,true));