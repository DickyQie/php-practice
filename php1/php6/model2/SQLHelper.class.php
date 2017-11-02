<?php


namespace Foo;
/***
 * Class SQLHelper
 * 数据库工具类
 * var ==public 兼容低版本；
 */
class SQLHelper {
    //var $conn;
    public $conn;
    public $dbname="happy";
    public $usernmae="root";
    public $password="123456";
    public $host="localhost";

    public function __construct(){
        $this->conn=mysql_connect($this->host,$this->usernmae,$this->password);
        if(!$this->conn){
            die("连接失败".mysql_errno());
        }
        mysql_select_db($this->dbname,$this->conn);
        mysql_query("set names utf8");
    }

    //执行sql语句
    public function execute_sql($sql){
        $re=mysql_query($sql,$this->conn) or die(mysql_error());
        return $re;
    }

    /***
     * @param $sql
     * @return array
     * 执行sql语句
     * 得到数据马上释放资源
     */
    public function execute_sql2($sql){
        $arr=array();
        $re=mysql_query($sql,$this->conn) or die(mysql_error());
        $i=0;
        while($row=mysql_fetch_assoc($re)){
            $arr[$i++]=$row;
            //$arr[]=$row;//结果集自动转
        }
        mysql_free_result($re);
        return $arr;
    }


    /****
     * @param $sql1
     * @param $sql2
     * @param $fengyePage
     * 考虑分页
     * $sql1=select * from 表名 where
     * $sql2=select count(id) from 表名
     */
    public function excute_sql_fenye($sql1,$sql2,$fengyePage){
        $res=mysql_query($sql1,$this->conn) or die(mysql_errno());
        $arr=array();
        while($row=mysql_fetch_assoc($res)){
            $arr[]=$row;
        }
        mysql_free_result($res);

        $res2=mysql_query($sql2,$this->conn) or die(mysql_errno());
        if($row=mysql_fetch_row($res2)){
            $fengyePage->pageCount=ceil($row[0]/$fengyePage->pageSize);
            $fengyePage->rowCount=$row[0];
        }
        mysql_free_result($res2);
        //导航对象分装分页中
        $navigate="";
        if($fengyePage->pageNow>1){
            $prePage=$fengyePage->pageNow-1;
            $navigate= "<a href='empList.php?pageNow=$prePage'>上一页</a>&nbsp;";
        }
        if($fengyePage->pageNow<$fengyePage->pageCount){
            $nextPage=$fengyePage->pageNow+1;
            $navigate.="<a href='empList.php?pageNow=$nextPage'>下一页</a>&nbsp;";
        }
        $fengyePage->res_array=$arr;
        $fengyePage->navigate=$navigate;
    }

    public function execute_dml($sql){
        $b=mysql_query($sql,$this->conn) or die(mysql_errno());
        if(!$b){
            return 0;//失败
        }else{
            if(mysql_affected_rows($this->conn)>0){//受影响的行数
                return 1;//执行ok
            }else{
                return 2;//没有行受影响
            }
        }
    }

    /***
     * 关闭
     */
    public function close_connect(){
        if(!empty($this->conn)){
            mysql_close($this->conn);
        }
    }



}