<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/20
 * Time: 9:26
 */

$int=1;
echo $int,'<br/>';
$int=-12;
echo $int,'<br/>';
$int=0x123;//8进制
 //同样是一个语言结构，可以使用括号，也可以不使用括号： print 或 print()。
print $int;
echo'<br/>';

$str='长';//一个字符串占3个长度
echo $str.'---'.strlen($str),'<br/>';

//复合类型 数组  对象
$array=array();
var_dump($array);
echo '<br/>';
$onject=new stdClass();
var_dump($onject);
echo '<br/>';


//转义字符
/**
 * \'==' \"=="  \\==\  \$==$.....
 *    双引号全部转义
 *    单引号只转义 \'  \\
 *    \n 换行  \t 空格
 *    \r 回车
 */
$t1="a\nb\t\$c\\ I'm is \"zhang\"";
echo "<br/>";
echo $t1;


/**
 * 直接输出是包含< 会已HTml标记;
 *A>B,C<D,King&queen He sail "I'm Fine"
 */
echo '<br/>';
$string='A&gt;B,C&lt;D,King&amp;queen He sail &quot;I&#39;m Fine&quot;';
echo  $string;



//单个字符下标访问
$strn='abcd';
echo "<br/>";
echo $strn{3};//d
$strn{0}='A';
echo "<br/>".$strn;
//PHP 引擎是尽可能取合法字符
$string="zq";
echo "$strings";//bull
echo '<br/>';
echo "{$string}s";
echo '<br/>';
echo "${string}s";//{}之间不能有空格
echo '<br/>';



//HereDoc  相当于双引号
$tab=<<<TAB
    <table border='1' cellpadding='0' cellspacing='0' bgcolor='red'>
        <tr>
            <td>我的PHP</td>
            <td>我的PHP</td>
        </tr>
         <tr>
            <td>我的Android</td>
            <td>我的Android</td>
        </tr>
    </table>
TAB;

echo '<br/>',$tab;

//NowDoc 相当于单引号
$noc=<<<"de"
    this is $strn;
de;
echo '<br/>',$noc;


/***
 * {}[]
 *变量在{} 含空格无效
 */
$f='zq';
echo  "<br/>{$f}";
echo "This square is {$square->width}00 centimeters broad.";
error_reporting(E_ALL);//显示所有错误



//类型转换(显示(自动转换)隐士)
//其他类型转换值型
echo "<br/>";
echo 1+true;//2  true-->1
echo '<br/>';
echo 1+FALSE;//1  false-->0
echo '<br/>';
echo 1+null;//1 null-->0
echo '<br/>';
echo 1+'a';//1  不是以合法数字开始直接是0
echo '<br/>';
echo 1+'true';//1
echo '<br/>';
echo 1+'123ff';//124
echo '<br/>';
echo 1+'2bb2ddc2';//3
echo '<br/>';
echo 1+'2.2bb2ddc2';//3.2
echo '<br/>';
echo 1+'3e2bb2ddc2';//301  科学计数3e2=300
echo '<br/>';
echo 1+'-12bb2ddc2';//3.2

//其他类型转换字符串类型
echo '<br/>';
echo true;//1
echo '<br/>';
echo 'a',false,'b';//ab  false==null
echo '<br/>';
echo 'A',NULL,'B';//AB NULL=null
echo '<br/>';
$array=array();
echo $array;//Array  转换了字符
echo '<br/>';
//资源
$handle=fopen('t3.php', 'r');
echo $handle;//Resource id #3
echo '<br/>';



//强制转换

$var=12;
var_dump((float)$var,(double)$var,(real)$var,(string)$var,(boolean)$var);
echo '<hr/>';

//临时转换
$var=true; //1 1  1  1
echo intval($var),"\n",doubleval($var),"\t",floatval($var),"\r",strval($var);

//永久转换---------
echo "<br/>";
$var=123;
echo gettype($var);//integer
//设置变量类型
echo '<br/>';
settype($var, 'float');
var_dump($var);
settype($var, 'string');
var_dump($var);
