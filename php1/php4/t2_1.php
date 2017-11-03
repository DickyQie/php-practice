<?php

/***
 * Session 获取对象需要在  start启动之前 引入存取的类
 *
 * 可使用单独建类，用require_once;
 *
 */
/*class Dog{
    private $name;
    private $age;
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    function showName(){
        return $this->name;
    }
}*/
require_once("Dog.class.php");
session_start();




$dog2=$_SESSION['dog'];
echo $dog2->showName();
