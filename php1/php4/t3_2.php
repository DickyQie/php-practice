<?php

/****
 * 多个文件上传
 */

//header("Content-Type:text/html;charset=utf-8");

echo "1";

$num=count($_FILES['pic']['name']);
for($i=0;$i<$num;$i++){
    if($_FILES['pic']['error'][$i]>0){
        switch($_FILES['pic']['error'][$i]){
            case 1:
                echo "表示上传文件大小超出了约定值(php.ini中)<br>";
                break;
            case 2:
                echo "表示上传文件大小超出了HTML表单隐藏域属性的MAX_FILE_SIZE所指定的最大值<br>";
                break;
            case 3:
                echo "文件只有部分上传<br>";
                break;
            case 4:
                echo "文件没有上传任何文件<br>";
                break;
            default:

                echo "位置错误<br>";
                break;
        }
        continue;
    }

    $arr=explode(".",basename($_FILES['pic']['name'][$i]));
    $hz=array_pop($arr);
    $allowtype=array("gif","png","jpg","jpeg");
    if(!in_array($hz,$allowtype)){
        echo "上传类型不合适<br>";
        continue;
    }
    $maxsize=1000000;
    if($_FILES['pic']['size'][$i]>$maxsize){
        echo "上传文件超过了{$maxsize}字节大小<br>";
        continue;
    }
    $tmpfile=$_FILES['pic']['tmp_name'][$i];
    $srcname="./upload/".date("YmdHis").rand(100,999).".".$hz;
    if(move_uploaded_file($tmpfile,$srcname)){
        echo $_FILES['pic']['name'][$i]."上传成功<br>";
    }else{
        echo "上传失败<br>";
    }

}
