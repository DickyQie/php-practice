<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/3
 * Time: 19:58
 */

class Dog {
    private $name;
    private $age;
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    function showName(){
        return $this->name;
    }
}