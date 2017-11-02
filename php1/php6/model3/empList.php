<html>
<head>
    <meta charset="utf-8">
    <title>信息表</title>
</head>

<script type="text/javascript">

    function showClick(val){
        return window.confirm("你是否要删除ID==="+val+"用户");
    }
</script>
<body>
    <?php

        //V层
        require_once("EmpService.class.php");
        require_once("FonyPage.class.php");

        //封装2
        $fenyePage=new FonyPage();
        $fenyePage->pageNow=1;
        $fenyePage->pageSize=3;
        $fenyePage->gotoUrl="empList.php";

        if(!empty($_GET["pageNow"])){
            $fenyePage->pageNow=$_GET["pageNow"];
        }


        $empService=new EmpService();
        $empService->getEmpFengYePage($fenyePage);


        echo "<h2>信息表</h2>";
        echo "<table width='800px' border='1px solide' cellspacing='1' cellpadding='1'>";
        echo "<tr><th>ID</th><th>name</th><th>grade</th><th>email</th><th>salary</th><th>修改用户</th><th>删除用户</th></tr>";

       for($i=0;$i<count($fenyePage->res_array);$i++){
           $row=$fenyePage->res_array[$i];
            echo "<tr><td>{$row["id"]}</td><td>{$row["name"]}</td><td>{$row["gade"]}</td><td>{$row["email"]}</td>
                        <td>{$row["salary"]}</td><td><a href='updateEmp.php?id={$row['id']}'>修改</a> </td><td><a onclick='return showClick({$row['id']})' href='empProcess.php?fang=delete&id={$row['id']}'>删除</a> </td></tr>";
        }
        echo "</table>";
        /***
         * 分页数目
         * 数据多了几十万条  会崩溃
         * 限制页数
         */
        echo "<a href='empList.php?pageNow=1'>首页</a>&nbsp;&nbsp;";
        for($i=1;$i<=$fenyePage->pageCount;$i++){
            echo "<a href='empList.php?pageNow=$i'>$i</a>&nbsp;&nbsp;";
        }
        echo "<a href='empList.php?pageNow=$fenyePage->pageCount'>尾页</a>&nbsp;&nbsp;";


        echo $fenyePage->navigate;


        echo "<br/>当前页{$fenyePage->pageNow}/共{$fenyePage->pageCount}页<br>";



        $pageWhole=$fenyePage->pageSize;
        $start=floor(($fenyePage->pageNow-1)/$pageWhole)*$pageWhole+1;
        $index=$start;
        //整体页向前翻
        if($fenyePage->pageNow>$pageWhole) {
            if(($fenyePage->pageCount-$fenyePage->pageNow>3)) {
                echo "<a href='empList.php?pageNow='.($start-1).'><<</a>&nbsp;&nbsp;";
            }else{
                echo "<a href='empList.php?pageNow='.($start-3).'><<</a>&nbsp;&nbsp;";
            }
        }
        for(;$start<$index+$pageWhole;$start++){
            if($start<=$fenyePage->pageCount) {
                echo "<a href='empList.php?pageNow=$start'>$start</a>&nbsp;&nbsp;";
            }
        }
        //整体页向后翻
        if($start<=$fenyePage->pageCount) {
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
