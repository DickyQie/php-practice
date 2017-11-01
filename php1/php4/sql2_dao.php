

<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/31
 * Time: 15:57
 *
 * SQL工具类
 *
 */

$link=mysql_connect('localhost','root','123456');
if($link){
    $db=mysql_select_db('happy',$link);
    if(!$db){
        echo "连接失败";
        exit;
    }else{
        echo "成功<br/>";
        mysql_query("set character set 'utf8'");
        mysql_query("set names 'utf8");
    }
}else{
    echo "数据库对接失败";
    exit;
}


//添加界面
if($_SERVER['REQUEST_METHOD'] =='POST' || $_SERVER['REQUEST_METHOD'] =='GET'){
    $type=$_GET["type"];
    if($type=="add" || $type=="update"){
        $name=$_POST["username"];
        $age=$_POST["age"];
        $sex=$_POST["sex"];
        $tel=$_REQUEST["tel"];
        $email=$_POST["email"];
        $content=$_POST["content"];
        if(strlen($name)>2){
            if($age<216 && $age>0){
                if(strlen($tel)==11){
                    if(preg_match("/^1[34578]\\d{9}$/", $tel)){
                        $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
                       if(preg_match($pattern,$email)){

                           if($type=="add"){
                               $sql="insert into userinfo(username,age,sex,tel,email,content) values('$name',$age,$sex,'$tel','$email','{$content}')";
                               echo $sql;
                               $re=mysql_query($sql,$link);
                               if($re){
                                   echo '<br/>添加个人信息成功<br/> <a href="sql2_select.php">查看</a><br/>';
                                   echo '5秒自动跳转 <meta http-equiv=refresh content="5;url=sql2_select.php">';
                               }else{
                                   echo "添加失败";
                               }
                           }elseif($type=="update"){
                               $id=$_GET["id"];
                               echo $id;
                               $sql="update userinfo set username='$name',age=$age,sex=$sex,tel='$tel',email='$email',content='$content' where id=$id";
                               $re=mysql_query($sql,$link);
                               if($re){
                                   echo '<br/>修改信息成功<br/> <a href="sql2_select.php">查看</a><br/>';
                                   echo '5秒自动跳转 <meta http-equiv=refresh content="5;url=sql2_select.php">';
                               }else{
                                   echo "修改失败";
                               }


                           }

                       }else{
                           echo "邮箱格式不正确";
                       }
                    }else{
                        echo "手机号格式不正确";
                    }
                }else{
                    echo "手机号不等于11位";
                }
            }else{
                echo "请输入正确年龄阶段";
            }
        }else{
            echo "用户名大于2位";
        }
    }elseif($type=="delete"){
        $deleteid=$_GET["id"];
        $sql="delete from userinfo WHERE id=$deleteid";
        $re=mysql_query($sql,$link);
        if($re){
            echo '删除成功<a href="sql2_select.php">查看</a><br/>';
            echo '5秒自动跳转 <meta http-equiv=refresh content="5;url=sql2_select.php">';
        }else{
            echo "删除失败";
        }
    }





}


