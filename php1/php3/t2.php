<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/10/30
 * Time: 17:41
 */

/***
 * Interface iDB接口测试
 */


interface iDB{
    function connect($sql);
    function add($sql);
}


