<?php
/****
 *绘图报表
 */

/****
1、图片格式：目前网站开发常见的图片格式有gif,jpg/jpeg,png .....
区别：
gif 图片压缩率高，但是只能显示256色，可能造成颜色的丢失，可以显示动画

jpg/jpeg 图片压缩率高(有损压缩)，可以用较小的文件来显示，网页上用得比较多

png 该格式综合了gif和jpg的优势，缺点是不能显示动画

  extension=php_gd2.dll 绘画启用
 */

$width=600;
$height=600;
//绘图技术 基本步骤 前提:在php.ini文件中启用gd库

//创建画布 默认背景是黑色的
$img=imagecreatetruecolor($width,$height);
//创建一个红色
$red=imagecolorallocate($img,255,0,0);
//粉红色
$red2=imagecolorallocate($img,255,75,75);
//画圆
imageellipse($img,60,100,50,50,$red);
//直线
imageline($img,0,0,600,600,$red);
//矩形
imagerectangle($img,12,12,40,50,$red);
//填充矩形  粉红色
imagefilledrectangle($img,12,12,40,50,$red2);
//画弧线
imagearc($img,50,150,75,75,90,180,$red);

//画扇型  IMG_ARC_CHORD直线连接了起始和结束点   IMG_ARC_PIE
imagefilledarc($img, 60, 200, 100, 100, 110, 170, $red2,IMG_ARC_PIE);
////写字
imagestring($img,50,150,20,"hello world",$red2);

$strn="中文";
//imagettftext($img,30,5,25,55,$red,"?",$strn);//字体格式

//拷贝文件
$str=imagecreatefrompng("logo.png");
$imagesize=getimagesize("logo.png");
//imagecopy($img,$str,100,50,100,50,106,106);
imagecopy($img,$str,100,50,0,0,$imagesize[0],$imagesize[1]);
//输出图像Dao网页
header("content-type:image/png");


//输出图像到网页(右键可以另存为)
imagepng($img);

//销毁该图片(释放内存)
imagedestroy($img);





