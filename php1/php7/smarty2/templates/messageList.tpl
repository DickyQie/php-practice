<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>信息列表界面</title>
</head>
{*<script type="text/javascript">
   function checkPageNow(){
       var pageNow=document.getElementById('pageNow').value;
       var re = /^[1-9](\d)*$/;
       if(pageNow!=""){
           if(!re.test(pageNow)){
               alert("输入正确的字符1");
               document.getElementById("pageNow").value=pageNow.substring(0,pageNow.length-1);
               return false;
           }else{
               if(pageNow > <{$pagecount}>){
                   alert("你的数字过大");
                   document.getElementById("pageNow").value=pageNow.substring(0,pageNow.length-1);
               }
           }
       }else{
           alert("null");
       }
  }
</script>*}
<{include file="../js/my.js"}>

<body>
<form action="../controller/LoginController.php" method="post">
    <a href="">发布信息</a>&nbsp;&nbsp;
    <a href="">退出系统</a><br><br>
    <table border="1px" cellpadding="1px" cellspacing="1px" width="500px">
        <tr><td colspan="5">内部留言板</td></tr>
        <tr>
            <td>编号:</td>
            <td>发送人:</td>
            <td>时间:</td>
            <td>接收人:</td>
            <td>内容:</td>
            <td>操作</td>
        </tr>
        <{foreach from=$res item=mess}>
        <tr>
            <td><{$mess.smamsg_id}></td>
            <td><{$mess.sender}></td>
            <td><{$mess.sendtime}></td>
            <td><{$mess.qetter}></td>
            <td><{$mess.content}></td>
            <td><a href='../controller/DeleteControll.php?id=<{$mess.smamsg_id}>'>删除</a> </td>
        </tr>
        <{/foreach}>
    </table>

</form>
<{$navi}>
</body>
</html>