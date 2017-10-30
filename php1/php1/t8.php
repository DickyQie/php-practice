<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 10:06
 */

/***
 * goto用来跳转到程序中的另一位置
 * 无法跳入for  switch
 * goto 操作符仅在 PHP 5.3及以上版本有效。
 * goto 有一定限制，目标位置只能位于同一个文件和作用域，
 * 也就是说无法跳出一个函数或类方法，也无法跳入到另一个函数。也无法跳入到任何循环或者 switch 结构中。可以跳出循环或者 switch，通常的用法是用 goto 代替多层的 break。
 */
goto a;
echo 'Foo';
a:
echo 'Bar';

echo '<br/>';
//跳出for(多层 也可以)
for ($i = 0; $i <=3; $i++) {
    if ($i==2)
    {
        goto  tsfor;
    }
    echo $i;

}
tsfor:;
echo '<br/>1<br/>';

/***
 * 字符串
 * trim(string str,[string charlist]);取出左右空格
 * charlist[]  过滤制定字符
 */
echo '<br/>';
$a="\r\r(:sdf:)";
echo $a;
echo '<br/>';
echo trim($a);
echo '<br/>';
echo trim($a,"\r\r(::)");
echo '<br/>';
/***
 * ltrim(string str,[string charlist])
 * 去除字符串左边空格或者指定字符串
 */
$a="\r\r(:sdf:)";
echo ltrim($a);
echo '<br/>';
echo ltrim($a,"\r\r(:)");
echo '<br/>';
/***
 * rtrim(string str,[string charlist])
 * 去除字符串右边空格或者指定字符串
 */
$a="\r\r(:sdf:)";
echo rtrim($a);
echo '<br/>';
echo rtrim($a,"\r\r(:)");
echo '<br/>';

/***
 * 转义字符
 * 1：手动转义
 */

echo 'select * from tb_boob where name=\'p5\'';
$str="select * from tb_book where name='p5'";
echo '<br/>'.$str;
echo '<br/>'.addslashes($str);//特殊字符转义
echo '<br/>'.stripcslashes($str);//字符还原

$str="编程";
echo '<br/>'.$str;
echo '<br/>'.addcslashes($str,"编程");//\347\274\226\347\250\213
echo '<br/>'.stripcslashes('\347\274\226\347\250\213');//字符还原


/***
 * 截取字符串
 */
echo "<br/>";
echo substr('abcdef',1,4);//bcde;
echo '<br/>'.substr('abcdef',1,-1);//bcde  -1表示倒数

/***
 * 比较字符串
 * 1：按字节进行字符串比较 相等返回0 str1大于str2返回大雨0的值  反之
 */
$str1="天";
$str2="天";
$str3='zq';
$str4="ZQ";
echo '<br/>'.strcmp($str1,$str2);//0
echo '<br/>'.strcmp($str3,$str4);//1 区分大小写
echo '<br/>'.strcasecmp($str3,$str4);//0 不区分大小写


/****
 * 2：按自然排序法比较
 * 与strcmp相同
 */

$str1='str2.jpg';
$str2='str10.jpg';
$str3='zq1';
$str4='ZQ2';
echo '<br/>'.strnatcmp($str1,$str2);//-1
echo '<br/>'.strnatcmp($str3,$str4);//1
echo '<br/>'.strnatcasecmp("zq2",$str4);//0不区分大小写


/***
 * 指定字符串长度从起始位置开始比较
 */
$str1='str.jpg';
$str2='strr2.jpg';
$str3='zq1';
$str4='ZQ2';
echo '<br/>'.strncmp($str1,$str2,3);//0
echo '<br/>'.strncmp($str3,$str4,2);//1
echo '<br/>'.strncasecmp($str3,$str4,2);//0

/***
 * 检索字符串
 * strstr(string,string);成功返回相匹配的字符，失败false
 * 检索关键字的出现次数
 * substr_count
 */

echo '<br/>'.strstr('jpgpng','jpg');//jpgpng
echo '<br/>'.strstr('jpgpng','jpg2');//false==null
echo '<br/>'.substr_count('jpgpng','g');//2
echo '<br/>'.substr_count('jpgpng','G');//0


/***
 * 替换字符串
 * str-ireplace()不区分大小写
 * str-replace*(）区分大小写
 */

$str1='慢慢';
$str2='**';
$str='慢慢的的萨芬';
echo '<br/>'.str_ireplace($str1,$str2,$str);//**的的萨芬
$str1='aa';
$str='AA的的萨芬';
echo '<br/>'.str_ireplace($str1,"<font color='#ff0000'>".$str1."</font>", $str);

$str='双培的回报';
$replaces="百倍";
echo '<br/>'.substr_replace($str,$replaces,0,4);//百倍的回报

echo '<br/>';
