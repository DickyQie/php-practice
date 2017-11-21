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
 * 默认最大是2M
 *
 *
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

if(is_uploaded_file($_FILES["userfile"]['tmp_name'])){
    echo "<br>文件通过post上传ok，然后执行其他操作";
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
if(move_uploaded_file($tmp,$stname)){//将上传文件移到什么位置
    echo "<br>文件上传成功";
}else{
    echo "<br>上传失败";
}*/


/****
 * 公司项目要把文件分区，用户名来分或时间来分
 * 创建文件夹
 * 名字：英文，id号，转码（字母md5）
 *
 * 防止文件名相同的文件名
 */
echo "<br/>".strrchr($_FILES['userfile']['name'],".")."<br/>";//.jpg
echo "<br/>".strrpos($_FILES['userfile']['name'],".")."<br/>";//length
echo substr($_FILES['userfile']['name'],strrpos($_FILES['userfile']['name'],"."))."<br>";//.jpg

$tmp=$_FILES['userfile']["tmp_name"];
echo $tmp;
if(is_uploaded_file($_FILES['userfile']["tmp_name"])){
    //给每个用户创建文件夹
    $user_path="./upload/".$_POST['username'];
    //文件夹是否存在
    if(!file_exists($user_path)){
        mkdir($user_path);
    }
    //$move_to_file=$user_path."/".$_FILES['userfile']['name'];//中文不可以
    //防止文件名相同的文件名1： 时间  2：md5
    $move_to_file=$user_path."/".time().rand(1,1000).substr($_FILES['userfile']['name'],strrpos($_FILES['userfile']['name'],"."));
    if(move_uploaded_file($tmp,iconv("utf-8","gb2312",$move_to_file))){//将上传文件移到什么位置,中文编码
        echo "<br>文件上传成功";
    }else{
        echo "<br>上传失败1";
    }
}else{
    echo "<br>上传失败2";
}




