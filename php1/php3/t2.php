<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 17:41
 */

/***
 * Trait :代码复用
 */

class Base{
    public function sayHello(){
        echo 'Hello';
    }
}

trait SayWorld{
    public function sayHello(){
        parent::sayHello();
        echo ' World';
    }
}

class MyHelloWorld extends Base{
    use SayWorld;
}

$ab=new MyHelloWorld();
$ab->sayHello();



