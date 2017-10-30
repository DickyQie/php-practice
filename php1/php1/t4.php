<?php
/**
 *
 * 运算符
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/20
 * Time: 17:01
 */

/***
 *
 * 1：算术运算符
 * + - * / % ++ --
 */
echo -8%3;//-2 (被除数是负数则得到 负值)
echo '<br/>';
/***
 * 2:字符串运算符
 * “.”  将两个字符传连接起来(同Java C++  的+)
 *
 */
$a='hello';
$b="world";
echo $a.' '.$b;
$a="Hello ";
$a.="world";
echo '<br/>'.$a.'<br/>';
/**
 * 3:赋值运算符
 * =  +=  -= *=  /=  .=(将右边字符加到左)  %=
 */
$a=1;
echo ($b=2)+$a.'<br/>';
/***
 * 4:位运算符==
 * & | ^ ~ << >>
 *
 */
$a=8;
$b=12;
$ab=$a & $b;
echo $ab,$a | $b;//812
echo '<br/>';
echo $a^$b,'<br/>';//4
echo ~$b;//-13
echo '<br/>';
/***
 * 5：逻辑运算符
 * && ||/or  ! xor(为一真一假时true)
 * or  || 相反
 */
$a=true;
$b=true;
$c=false;
if($a or $b and $c)
{
    echo "true";//true
}
else{
    echo 'fasle';
}

if($a || $b and $c)
{
    echo "true";
}
else {
    echo 'false';
}//false

echo $b xor $c;//1
echo '<br/>';
echo var_dump($a or $b and $c);//1=true
echo '<br/>';
/***
 * 6:比较运算符（得到true  false）
 * $a===$b (数值相等，类型也相同)
 * $a!==$b (数值不相等，类型也不相同)
 */
$var='100';
echo "\$var=\"$var\"";
echo $var==100,$var==true,$var!=null;//111
echo "<br/>";
echo $var==='100';//1
echo $var!==100;   //1



echo '<br/>';
/**
 * 7:错误控制运算符
 * 错误表达式前+@
 * 错误不显示
 * */
$err=@(5/0);
echo $err;
//计算错误 Warning: Division by zero in E:\Android\php\PHP1\php1\demo2\t2.php on line 82
echo '<br/>';
/***
 * 8:三元运算符
 * 自 PHP 5.3 起，可以省略三元运算符中间那部分
 * 返回第一部分
 * 列去掉三  则返回  1
 */
$v=100;
echo ($v==true)?三:NO;
echo '<br/>';


$string='张切';
//UTF-8 一个汉字 3bytes GBK 2bytes
echo strlen($string);//6






