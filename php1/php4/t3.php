<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/31
 * Time: 21:45
 */

/****
 * 文件
 *
 *
 */

//返回文本+长度大小
echo readfile("msg.txt")."<br/>";//my name is zhangqie 张切 张三34



$myfile = fopen("msg.txt", "r") or die("Unable to open file!");
//fread() 的第一个参数包含待读取文件的文件名，第二个参数规定待读取的最大字节数。
echo filesize("msg.txt")."<br/>";
echo "指定文件大小读取：".fread($myfile,12)."<br/>";
fclose($myfile);//关闭文件




$myfile = fopen("msg.txt", "r") or die("Unable to open file!");
//读取单行文件
echo "读取单行文件：".fgets($myfile)."<br/>";
fclose($myfile);


//逐行读取，遍历  直到end-of-file
$myfile=fopen("msg.txt","r") or die("Ynable to open file");
echo "逐行读取: <br/>";
while(!feof($myfile)){
     echo fgets($myfile)."<br/>";
   // echo fgetc($myfile)."<br/>";//读取单个字符
}
fclose($myfile);

/***
 * 文件创建和写入
 * fopen也可用来创建文件
 */

$myfile=fopen("testfile.txt","w") or die("error");
$txt="this is model 你好\n";
fwrite($myfile,$txt);
$txt="this is View\n";
fwrite($myfile,$txt);
fclose($myfile);

//运行第二次会覆盖


//文件属性

function getFile1($filename){
    if(file_exists($filename)){
        echo "这个文件存在<br/>";
        echo "文件大小：".toSize(filesize($filename))."<br/>";
        echo "文件类型：".filetype($filename)."<br/>";
        if(is_dir($filename)){
            echo "这是一个目录<br/>";
        }elseif(is_file($filename)){
            echo "这是一个文件<br/>";
        }

        //文件权限
        if(is_readable($filename)){
            echo "文件可读<br>";
        }
        if(is_executable($filename)){
            echo "文件可执行<br>";
        }
        if(is_writable($filename)){
            echo "文件可写<br>";
        }

        //文件创建时间
        echo date("Y-m-d H:i:s",filectime($filename))."<br>";
        //文件访问时间
        echo date("Y-m-d H:i:s",fileatime($filename))."<br>";
        //文件修改时间
        echo date("Y-m-d H:i:s",filemtime($filename))."<br>";


    }else{
        echo "文件不存在<br/>";
    }
}


function toSize($size){
    $s=$size;
    $dw="";
    if($size > pow(2,40))
    {
        $s=$size/pow(2,40);
        $dw="TB";
    }elseif($size > pow(2,30)){
        $s=$size/pow(2,30);
        $dw="GB";
    }elseif($size > pow(2,20)){
        $s=$size/pow(2,20);
        $dw="MB";
    }elseif($size > pow(2,10)){
        $s=$size/pow(2,10);
        $dw="KB";
    }else{
        $s=$size;
        $dw="type";
    }
    return $s.$dw;
}

getFile1("msg.txt");


/***
 * 文件目录
 * 了解
 */
function getFileMulu(){
    echo "aaa".DIRECTORY_SEPARATOR."bbb".DIRECTORY_SEPARATOR."ccc<br>";//aaa\bbb\ccc
    echo "a/b".PATH_SEPARATOR."c/d<br/>";//a/b;c/d
    echo PHP_EOL;//换行
    echo "a<br/>";

    $c=disk_total_space("C:");
    $b=disk_free_space("C:");
    echo "C盘的总大小：".($c/pow(2,30))."G<br/>";
    echo "C盘的可用空间：".($b/pow(2,30))."G<br/>";
}

getFileMulu();


//读取2
echo file_get_contents("msg.txt")."<br/>";


//读取3
$array=parse_ini_file("db.txt");
//Array ( [host] => 192.168.1.23 [name] => zhangqie [passworld] => 123456 )
print_r($array);

//存连接数据库信息，
//mysql_connect


//第二种文件写入

$con="北京你好!\r\n";
file_put_contents("msg.txt",$con,FILE_APPEND);
//会重复添加，for循环不好   自身包含一次写入 一次关闭，多个重复影响效率，用可以拼接




//拷贝文件

copy("testfile.txt","E:\\Fphpstorm\\PhpPrimary\\php1\\php4\\upload\\a.txt");

echo "<br/>ok";


//文件夹创建和删除

if(!is_dir("e:/zhangqie") && mkdir("e:/zhangqie")){
    echo "<br/>创建成功";
}else{
    echo "<br/>创建失败";
}

//删除文件夹
if(rmdir("e:/zhangqie")){
    echo "<br/>删除成功";
}else{
    echo "<br/>删除失败";
}


//删除文件
/*$file="E:\\Fphpstorm\\PhpPrimary\\php1\\php4\\upload\\a.txt";
if(is_file($file)){
    if(unlink($file)){
        echo "<br/>删除成功";
    }else{
        echo "<br/>删除失败";
    }
}else{
    echo "文件不存在";
}*/










