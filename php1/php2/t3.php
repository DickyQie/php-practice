<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 14:25
 */

if($_SERVER['REQUEST_METHOD'] =="POST") {//验证表单是个已被提交，没提交显示白纸

    $username = $_POST['username'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_REQUEST['pwd2'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $yam1 = $_POST['yzm'];
    $yam2 = strip_tags($_REQUEST['yzm1']);//验证码去掉html标记
    echo $username, $pwd1, $pwd2, $email, $age, $yam1, '==', $yam2;

    $char = $username{0};
    $ascii = ord($char);
    echo '<br/>' . $ascii;
    if ($username != null && strlen($username) > 3) {
        if (($ascii >= 97 && $ascii <= 122) || ($ascii >= 65 && $ascii < 90)) {//验证英文字母开头
            if (strlen($pwd1) >= 6 && strlen($pwd2) > 5) {
                if ($pwd1 == $pwd2) {
                    if (strstr($email, "@") != null && strstr($email, ".com") != null) {
                        if (strtolower($yam1) === strtolower($yam2)) {
                            echo "姓名：" . $username . "---" . $pwd1 . '----' . $pwd2 . '<br/>';
                            echo "邮箱：" . $email . '---' . $age . '---' . $yam1 . '---' . $yam2;
                            echo '<meta http-equiv="refresh" content="3; url=https://www.baidu.com/"/> ';
                        } else {
                            echo '验证码不正确';
                        }
                    } else {
                        echo '邮箱格式不正确';
                    }
                } else {
                    echo '密码不一致';
                }
            } else {
                echo '密码必须大于六位';
            }
        } else {
            echo '用户名以英文开头';
        }
    } else {
        echo '用户名错误';
    }
}
