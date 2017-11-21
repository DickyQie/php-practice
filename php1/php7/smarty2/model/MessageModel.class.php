<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7
 * Time: 15:51
 */

require_once("SQLHelper.class.php");
class MessageModel {

    public function showMessage($name){
        $sql="select * from smarty_msg where qetter='$name'";
        $sqlHelper=new SQLHelper();
        $arr=$sqlHelper->execute_sql2($sql);
        $sqlHelper->close_connect();
        return $arr;
    }

    public function showFenYeMessage($fengPage,$name){
        $sql[0]="select count(*) from smarty_msg where qetter='$name'";
        $sql[1]="select * from smarty_msg where qetter='$name' limit ".($fengPage->pageNow-1)*$fengPage->pageSize.",".$fengPage->pageSize;
        $sqlHelper=new SQLHelper();
        $sqlHelper->excute_sql_fenye($sql[1],$sql[0],$fengPage);
        $sqlHelper->close_connect();
    }

    public function showDelete($id){
        $sql="delete from smarty_msg where smamsg_id=$id";
        $sqlHelper=new SQLHelper();
        $re=$sqlHelper->execute_dml($sql);
        $sqlHelper->close_connect();
        return $re;
    }

}