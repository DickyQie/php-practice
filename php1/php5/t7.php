<?php


$img=imagecreatetruecolor(400,300);
$white=imagecolorallocate($img,255,255,255);
imagefill($img,0,0,$white);



$color1=imagecolorallocate($img,255,0,0);
$color2=imagecolorallocate($img,41,188,210);
$color3=imagecolorallocate($img,0,200,88);
$darknavy = imagecolorallocate($img, 0x00, 0x00, 0x50);
$red      = imagecolorallocate($img, 0xFF, 0x00, 0x00);
$darkred  = imagecolorallocate($img, 0x90, 0x00, 0x00);


for($i=60;$i>=50;$i--){
    imagefilledarc($img,100,$i,100,50,0,60,$darknavy,IMG_ARC_PIE);
    imagefilledarc($img,100,$i,100,50,60,150,$red,IMG_ARC_PIE);
    imagefilledarc($img,100,$i,100,50,150,360,$darkred,IMG_ARC_PIE);
}
imagefilledarc($img,100,50,100,50,0,60,$color1,IMG_ARC_PIE);
imagefilledarc($img,100,50,100,50,60,150,$color2,IMG_ARC_PIE);
imagefilledarc($img,100,50,100,50,150,360,$color3,IMG_ARC_PIE);



//输出图像Dao网页
header("content-type:image/png");


//输出图像到网页(右键可以另存为)
imagepng($img);

imagedestroy($img);






/*
// 创建图像
$image = imagecreatetruecolor(100, 100);

// 分配一些颜色
$white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray     = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy     = imagecolorallocate($image, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
$red      = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$darkred  = imagecolorallocate($image, 0x90, 0x00, 0x00);

// 创建 3D 效果
for ($i = 60; $i > 50; $i--) {
    imagefilledarc($image, 50, $i, 100, 50, 0, 45, $darknavy, IMG_ARC_PIE);
    imagefilledarc($image, 50, $i, 100, 50, 45, 75 , $darkgray, IMG_ARC_PIE);
    imagefilledarc($image, 50, $i, 100, 50, 75, 360 , $darkred, IMG_ARC_PIE);
}

imagefilledarc($image, 50, 50, 100, 50, 0, 45, $navy, IMG_ARC_PIE);
imagefilledarc($image, 50, 50, 100, 50, 45, 75 , $gray, IMG_ARC_PIE);
imagefilledarc($image, 50, 50, 100, 50, 75, 360 , $red, IMG_ARC_PIE);


// 输出图像
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

*/


