<?php
/**
 * JPGraph
 * http://jpgraph.net
 *
 * 安装
 src：真正的类库文件夹，里面包含了所有需要的类库文件
  Examples：官方实例代码文件，可以直接使用的
 其他：需要的类库文件，不做任何改动。
 将src下的文件除了Examples文件夹其他全部复制（截切），在Examples下创建一个jpgraph文件夹放入其中，
 就可以运行Examples下的文件了，路径不对的改一下就行了
 *
 */


/****
 * 图片空格  不能打开
 *
 * t9.php初始加空格，不能打开
 *
 * 要在其他的php文件中使用，则可以使用img标签 如t8_1.php
 *
 */


/***
 * 验证码
 * 使用php绘制技术
 */

$checkCode="";
for($i=0; $i<4;$i++){
    $checkCode.=dechex(rand(1,15));
}
//存入session
session_start();
$_SESSION['checkcode']=$checkCode;

//画布大小
$img=imagecreatetruecolor(110,30);
$white=imagecolorallocate($img,109,183,77);
imagefill($img,0,0,$white);

//$color1=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
$color1=imagecolorallocate($img,255,255,255);
//画出干扰线
for($i=0;$i<15;$i++){
    imageline($img,rand(0,110),rand(0,30),rand(0,110),rand(0,30),imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255)));
}

imagestring($img,rand(2,8),rand(0,75),rand(0,15),$checkCode,$color1);

header("content-type: image/png");
imagepng($img);
imagedestroy($img);











