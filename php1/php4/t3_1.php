<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/1
 * Time: 9:34
 */

/***
 *
 * 文件本地
 * php.ini中 开启
 * D:\Android\Storm\xampp\php
 * file_uploads=on
 *
 */



if($_FILES["userfile"]['error']>0){
    echo "错误".$_FILES["userfile"]['error'];
}else{
    echo "上传文件名:".$_FILES['userfile']['name'];
    echo "<br/>上传文件大小:".$_FILES['userfile']['size']/100;
    echo "<br>上传文件类型:".$_FILES['userfile']['type'];
    echo "<br>上传文件零时存储位置:".$_FILES['userfile']['tmp_name'];
}


//指定类型上传
if($_FILES['userfile']['type'] =="image/gif" || $_FILES['userfile']['type']=="image/jpeg"
    || $_FILES['userfile']['type']=="image/png" || $_FILES['userfile']['type']=="image/jpg"){

    if($_FILES['userfile']['size']/100 > 2000) {
        echo "<br>文件过大";
        switch ($_FILES["userfile"]['error']) {
            case 1:
                echo "表示上传文件大小超出了约定值(php.ini中)";
                break;
            case 2:
                echo "表示上传文件大小超出了HTML表单隐藏域属性的MAX_FILE_SIZE所指定的最大值";
                break;
            case 3:
                echo "文件只有部分上传";
                break;
            case 4:
                echo "文件没有上传任何文件";
                break;
            default:

                echo "位置错误";
                break;

        }
    }else{
        if($_FILES["userfile"]['error']>0){
            echo "错误".$_FILES["userfile"]['error'];
        }else{
            echo "<br/>上传文件名:".$_FILES['userfile']['name'];
            echo "<br/>上传文件大小:".$_FILES['userfile']['size'];
            echo "<br>上传文件类型:".$_FILES['userfile']['type'];
            echo "<br>上传文件零时存储位置:".$_FILES['userfile']['tmp_name'];
        }
    }
}else{
    echo "<br>文件类型选错";
}



//上传到当前目录upload下
/*$tmp=$_FILES['userfile']["tmp_name"];
$stname="./upload/".$_FILES['userfile']['name'];
if(move_uploaded_file($tmp,$stname)){
    echo "<br>文件上传成功";
}else{
    echo "<br>上传失败";
}*/
