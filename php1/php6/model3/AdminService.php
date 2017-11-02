<?php
/**
 * Created by PhpStorm.
 * User: zhangqie
 * Date: 2017/11/1
 * Time: 22:36
 */

/****
 * Class AdminService
 * 业务逻辑类
 * M层
 */

require_once("SQLHelper.class.php");
class AdminService{

    //提供用户验证是否合法
    public function checkAdmin($id,$pwd){
        $sql="select * from admin WHERE name='$id'";
        $sqlHelper=new SQLHelper();
        $res=$sqlHelper->execute_sql($sql);
        if($row=mysql_fetch_assoc($res)){
            if(md5($pwd)==$row['password']){
                return $row['name'];
            }
        }
        //释放资源
        mysql_free_result($res);
        $sqlHelper->close_connect();
        return "";
    }
}