<?php



namespace Foo;
require_once("SQLHelper.class.php");
class EmpService
{
   /* private $sqlHlper;
        有问题
    function __construct(){
        $this->sqlHlper=new SQLHelper();
    }*/

    /***
     * @param $pageSize
     * @return float
     * 得到多少页
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
     * 删除用户
     */
    function deleteEmpById($id){
        $sql="delete from emp where id=$id";
        $sqlHelper=new SQLHelper();
        $sqlHelper->execute_dml($sql);
        $sqlHelper->close_connect();
    }

}