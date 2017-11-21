<?php
/***
 * 自定义函数
 */

require_once("./libs/Smarty.class.php");

$smarty=new Smarty();


$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";

$smarty->assign("sal",5000);

define("TMAX","8");

/***
 * Smarty模板中的变量调节器
 *capitalize [首字符大写]
count_characters [字符计数]
cat [连接字符串]
count_paragraphs [计算段数]   count_sentences [计算句数]
count_words [计算词数]   date_format [格式化日期]
default [默认值]    escape [编码]
indent [缩进]  lower [小写]
nl2br [换行符替换成 <br />]    regex_replace [正则替换]
replace [替换]    spacify [插空]
string_format [字符串格式化]   strip [去除(多余空格)]
strip_tags [去除html标签]   truncate [截取]
upper [大写]    wordwrap [行宽约束]

 *

 *
 */

$smarty->assign("a","hello");
/***
 * 变量调节器可以自定义
 * 文件名：modifier.xxx.php
 * 函数：function smarty_modifier_xxxx
 *  首字母大写，其余小写
 */


//统计段落
$smarty->assign('articleTitle', "War函数  Dims. \n Hope for. 你好");


$smarty->assign("bb","<a href='www.baidu.com'>百度</a>");

$smarty->assign("cc",file_get_contents("aa.txt"));

$smarty->assign("dd","1234的洒家地方5555");

$smarty->assign("ee","1 2 3 4 5");

$smarty->assign("ff","123123asdf");
//截取(解决中文乱码)  modifier.truncateutf8.php  自己写一个
$smarty->assign("ff1","123我的打撒123");

$smarty->assign("gg","Blind woman gets new kidney from dad she hasn't seen in years.");




$smarty->display("test4.tpl");