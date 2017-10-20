<?php
/**
 * 流程控制
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/20
 * Time: 17:21
 */

/** 流程控制
 * if else switch case while  do-while(比while多执行一次)
 * for foreach(遍历数组/对象)
 *
 * break 终止循环
 * continue 终止当前循环 继续下一次循环
*/

if(3>2):
    echo 'this is true';
else:
    echo 'this is false';
endif;
echo "<br/>";

$var = 'a';
switch($var){
    case 'a':
        echo 'a';
        break;
    case 'b':
        echo 'b';
        break;
}

echo "<br/>";
$vn=1;
while ($vn<=10){
    if($vn % 2==0){
        echo "--".$vn;
    }
    $vn++;
}
echo "<br/>";

$vn=1;
do{
    if($vn % 2==0){
        echo "--".$vn;
    }
    $vn++;
}while($vn<=10);


echo "<br/>";
$arr= array(1,2,3);
foreach ($arr as &$valus){
    echo $valus;
}
echo "<br/>".$valus;//3
//数组最后一个元素的 $value 引用在 foreach 循环之后仍会保留。建议使用 unset() 来将其销毁。
unset($valus);
echo $valus;//Undefined



//以下代码功能相同
$arr = array("one", "two", "three");
reset($arr);
while (list($key, $value) = each($arr)) {
    echo "Key: $key; Value: $value<br />\n";
}

foreach ($arr as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
}
echo '<hr/>';

$vm=0;
for ($i=0;$i<5;$i++){
    $vm++;
    if($vm==2){
        continue;
    }else{
        print $vm;
    }
}

