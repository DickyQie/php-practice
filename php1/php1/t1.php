<?php

header('content-type:text/html;charset=utf-8');

/***
 * 数据类型
 *
 * String  integer float boolean array() object null
 *
 */
 $str1='dddd';
 $str2="222";
 //定界符
 $str3=<<<edn

     <input type="text" value="dsf"/>

edn;

 echo $str1.'------'.$str2."<br/>";

 echo var_dump($str3).'<br/>'.$str3.'<br/>';
 



 /**
  * 可变变量
  * 超全局变量不能为可变变量
  * 单引号  转义 '  和 \
  * 双引号全部转义
  *
  */

 $a='hello';
 $$a='world';
 var_dump($$a);//string(5) "world"  //得到数据类型
 echo "<br/>$$a";//$hello


/***
 * 预定义变量
 */

 //var_dump($_FILES,$_SERVER);


echo $nene;//声明变量不存在
//Notice: Undefined variable: nene in E:\Fphpstorm\PhpPrimary\php1\php1\t1.php on line 48

//等量交换
$a='b';
$b='c';
$c='d';
echo $$$a;  //d


$i=1;
$j=$i;
echo '<br/>';
echo $i;
echo '<br/>';

echo $j;
echo '<br/>';
$j=12;
echo $j;
unset($i);// 销毁单个变量
echo  '<br/>';
//变量不存在
echo $i;// Undefined variable: i in

//html 加入 PHP
?>

<!DOCTYPE html>
<html>
<head>
    <title>T1</title>
    <style type="text/css">

        body {
            background: <?php
	           echo '#6c6c6c';
	       ?>
        }
    </style>
</head>

<body>

<div>PHP</div>


</body>

</html>

<?php
    echo 'html+PHP'
?>




