<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 17:46
 */

/***
 * Interface iTemplate
 * 接口
 */

interface  iTemplate{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// 实现接口
class Template implements iTemplate
{
    public function setVariable($name, $var)
    {
       echo $name.'---'.$var.'<br/>';
    }

    public function getHtml($template)
    {
      echo $template;
    }
}

$temp=new Template();
$temp->setVariable("zhangqie","23");
$temp->getHtml("php");



