<html>
<head>
    <meta charset="utf-8">
    <title>信息表</title>
</head>
<body>
    <?php


        require_once("EmpService.class.php");
        $pageSize=3;
        $rowCount=0;//总条数
        $pageNow=1;//显示第几页
        $pageCount=0;//共有多少页
        if(!empty($_GET["pageNow"])){
            $pageNow=$_GET["pageNow"];
        }
        $empService=new EmpService();
        $pageCount=$empService->getPageCount($pageSize);
        $res2=$empService->getEmpListByPage($pageNow,$pageSize);

        echo "<h2>信息表</h2>";
        echo "<table width='800px' border='1px solide' cellspacing='1' cellpadding='1'>";
        echo "<tr><th>ID</th><th>name</th><th>grade</th><th>email</th><th>salary</th><th>修改用户</th><th>删除用户</th></tr>";

       for($i=0;$i<count($res2);$i++){
           $row=$res2[$i];
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

        echo "<br/>当前页{$pageNow}/共{$pageCount}页<br>";



        $pageWhole=3;
        $start=floor(($pageNow-1)/$pageWhole)*$pageWhole+1;
        $index=$start;
        //整体页向前翻
        if($pageNow>$pageWhole) {
            if(($pageCount-$pageNow>3)) {
                echo "<a href='empList.php?pageNow='.($start-1).'><<</a>&nbsp;&nbsp;";
            }else{
                echo "<a href='empList.php?pageNow='.($start-3).'><<</a>&nbsp;&nbsp;";
            }
        }

        for(;$start<$index+$pageWhole;$start++){
            if($start<=$pageCount) {
                echo "<a href='empList.php?pageNow=$start'>$start</a>&nbsp;&nbsp;";
            }
        }

        //整体页向后翻
        if($start<=$pageCount) {
            echo "&nbsp;&nbsp;<a href='empList.php?pageNow=$start'>>></a>";
        }


        //指定跳转到指定页
    ?>
    <form action="empList.php">
        跳转到<input type="text" name="pageNow">
        <input type="submit" value="Go">
    </form>
</body>

</html>
