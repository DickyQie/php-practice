<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 15:59
 */
if($_SERVER['REQUEST_METHOD'] =='POST' || $_SERVER['REQUEST_METHOD'] =='GET'){
    $a=$_POST['name'];
    $b=$_POST['title'];
    $c=$_POST['text'];
    $c=htmlentities($c);
    $d=$_POST['gif'];
    $d='rand'?mt_rand(0,1).'git':$d;
    echo $d;
    $time=time();//得到当前时间
    $ip=$_SERVER["REMOTE_ADDR"];
    echo '<br/>'.$time.'<br/>'.$ip;
    $filename="msg.txt";
    $e=$_GET['act'];
    if($e==="add"){
        /***
         * file_exists($filename)//判断文件是否存在
         * filesize($filename)//验证文件大小
         * file_get_contents($filename)：返回文件大小
         */
        if(file_exists($filename) && filesize($filename) >0){
            $str=file_get_contents($filename);
            $arr=unserialize($str);
        }
        $arr[]=compact('a','b','c','d','time','ip');
        $data=serialize($arr);
        if (file_put_contents($filename, $data)) {
            echo '<br/>添加留言成功<br/> <a href="t5.php">继续添加</a> <a href="t7.php">查看</a>';
        }
        else {
            echo '添加留言失败<br/><a href="t5.php">重新添加</a>';
        }

    }elseif ($e==='editMes')
    {
        //修改操作
        $id=$_GET['id'];
        if(file_exists($filename)  && filesize($filename)>0)
        {
            $var=unserialize(file_get_contents($filename));
            $var[$id]['a']=$a;
            $var[$id]['b']=$b;
            $var[$id]['c']=$c;
            $var[$id]['d']=$d;
            $darr=serialize($var);
            if (file_put_contents($filename, $darr)) {
                echo '修改成功 3秒跳转 <meta http-equiv=refresh content="3;url=t10.php">';
            }
            else {
                echo '修改失败';
            }
        }
    }
    elseif ($e==="delete")
    {
        //删除
        $id=$_GET['id'];
        echo $id;
        if (file_exists($filename) && filesize($filename)>0)
        {
            $as=unserialize(file_get_contents($filename));
            unset($as[$id]);
            $data=serialize($as);
            file_put_contents($filename,$data);
            header('location:t7.php');
        }

    }
}