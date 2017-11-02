<?php

/****
 * M层
 */
require_once("SQLHelper.class.php");
require_once("Emp.class.php");

class EmpService
{

    /***
     * @param $pageSize
     * @return float
     * 得到多少页
     *
     */
    function getPageCount($pageSize)
    {
        $sql1 = "select count(id) from emp";
        $sqlHlper = new SQLHelper();
        $res = $sqlHlper->execute_sql($sql1);
        if ($row = mysql_fetch_row($res)) {
            $pageCount = ceil($row[0] / $pageSize);
        }
        mysql_free_result($res);
        $sqlHlper->close_connect();
        return $pageCount;
    }

    /***
     * 显示第几页信息
     */
    function getEmpListByPage($pageNow,$pageSize){
        $sql="select * from emp limit ".(($pageNow-1)*$pageSize).",$pageSize";
        $sqlHlper = new SQLHelper();
        $re=$sqlHlper->execute_sql2($sql);
        $sqlHlper->close_connect();
        return $re;
    }


    /***
     * 显示第几页信息
     */
    function getEmpFengYePage($pageFenYe){
        $sql1 = "select * from emp limit ".(($pageFenYe->pageNow-1)*$pageFenYe->pageSize).",".$pageFenYe->pageSize;
        $sql2 = "select count(id) from emp";
        $sqlHlper = new SQLHelper();
        $sqlHlper->excute_sql_fenye($sql1,$sql2,$pageFenYe);
        $sqlHlper->close_connect();
    }

    /***
     * @param $id
     * @return int
     * 删除用户
     */
    function deleteEmpById($id){
        $sql="delete from emp where id=$id";
        $sqlHelper=new SQLHelper();
        $loc=$sqlHelper->execute_dml($sql);
        $sqlHelper->close_connect();
        return $loc;
    }

    /***
     * @param $id
     * @return int
     * 添加用户
     */
    function addEmpById($name,$grade,$email,$salary){
        $sql="insert into emp(name,gade,email,salary) values ('{$name}',$grade,'{$email}',$salary);";
        $sqlHelper=new SQLHelper();
        $loc=$sqlHelper->execute_dml($sql);
        $sqlHelper->close_connect();
        return $loc;
    }
    /***
     * @param $id
     * @return array
     * 修改用户
     */
    function updateSelectEmpById($id){
        $sql="select * from emp where id=$id;";
        $sqlHelper=new SQLHelper();
        $arr=$sqlHelper->execute_sql2($sql);
        $sqlHelper->close_connect();
        //1数组
        //面向对象(二次分装)  Emp 的set get
        $emp=new model3\Emp();
        $emp->setId($arr[0]['id']);
        $emp->setName($arr[0]['name']);
        $emp->setGrade($arr[0]['gade']);
        $emp->setEmail($arr[0]['email']);
        $emp->setSaraly($arr[0]['salary']);
       // return $arr;
        return $emp;
    }

    /***
     * @param $id
     * @return int
     * 修改用户
     */
    function updateEmpById($id,$name,$grade,$email,$salary){
        $sql="update emp set name='$name',gade=$grade,email='{$email}',salary=$salary where id=$id;";
        $sqlHelper=new SQLHelper();
        $loc=$sqlHelper->execute_dml($sql);
        $sqlHelper->close_connect();
        return $loc;
    }

}