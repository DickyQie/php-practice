<?php

/***
 * Class FonyPage
 * 分页类
 */

class FonyPage {

    public $pageSize=3;
    public $rowCount;//总条数
    public $pageNow=1;//用户指定
    public $res_array;//显示数据
    public $pageCount;//总页数
    public $navigate;//导航分页
    public $gotoUrl;//表示把分页请求提交给谁
    public $gotoUrl1="../controller/LoginController.php";
    public $array;//显示数据



}