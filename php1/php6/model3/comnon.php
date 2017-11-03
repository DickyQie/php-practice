<?php


function getKey($id){


}

/***
 * 防止未登录直接访问  需要登录的界面
 */
function checkUserValidate(){
    session_start();
    if(empty($_SESSION['loginuser'])){
        header("Location:login.php?error=1");
    }
}

