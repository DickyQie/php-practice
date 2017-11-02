<html>
<head>
    <meta charset="utf-8">
    <title>信息表</title>
</head>
<body>
    <?php
        $conn=mysql_connect("localhost","root","123456") or die(mysql_errno());
        mysql_query("set names utf8");
        mysql_select_db("happy",$conn);

        $pageSize=3;
        $rowCount=0;//总条数
        $pageNow=1;//显示第几页
        $pageCount=0;//共有多少页
        if(!empty($_GET["pageNow"])){
            $pageNow=$_GET["pageNow"];
        }
       // echo $pageNow;

        $sql1="select count(id) from emp";
        $res1=mysql_query($sql1,$conn);
        if($count=mysql_fetch_row($res1)){
            $rowCount=$count[0];
        }
        //计算页数
        $pageCount=ceil($rowCount/$pageSize);


        //分页
        //select * from admin limit 0,1;(第几条开始取,取多少条)
        $sql="select * from emp limit ".(($pageNow-1)*$pageSize).",$pageSize";
        $res2=mysql_query($sql,$conn);
        echo "<table width='800px' border='1px solide' cellspacing='1' cellpadding='1'>";
        echo "<tr><th>ID</th><th>name</th><th>grade</th><th>email</th><th>salary</th><th>修改用户</th><th>删除用户</th></tr>";
        while($row=mysql_fetch_assoc($res2)){
            echo "<tr><td>{$row["id"]}</td><td>{$row["name"]}</td><td>{$row["gade"]}</td><td>{$row["email"]}</td>
                    <td>{$row["salary"]}</td><td><a href=''>修改</a> </td><td><a href=''>删除</a> </td></tr>";
        }
        echo "</table>";

        /***
         * 分页数目
         * 数据多了几十万条  会崩溃
         * 限制页数
         */
        echo "<a href='empList.php?pageNow=1'>首页</a>&nbsp;&nbsp;";
        for($i=1;$i<=$pageCount;$i++){
            echo "<a href='empList.php?pageNow=$i'>$i</a>&nbsp;&nbsp;";
        }
        echo "<a href='empList.php?pageNow=$pageCount'>尾页</a>&nbsp;&nbsp;";
        if($pageNow>1){
            $prePage=$pageNow-1;
            echo "<a href='empList.php?pageNow=$prePage'>上一页</a>&nbsp;";
        }
        if($pageNow<$pageCount){
            $nextPage=$pageNow+1;
            echo "<a href='empList.php?pageNow=$nextPage'>下一页</a>&nbsp;";
        }

        echo "<br/>当前页{$pageNow}/共{$pageCount}页";


        //指定跳转到指定页
    ?>
    <form action="empList.php">
        跳转到<input type="text" name="pageNow">
        <input type="submit" value="Go">
    </form>
    <?php




        mysql_free_result($res2);
        mysql_close();
    ?>
</body>

</html>
