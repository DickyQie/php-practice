<?php /* Smarty version 2.6.30, created on 2017-11-08 08:11:01
         compiled from messageList.tpl */ ?>
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
               if(pageNow > <?php echo $this->_tpl_vars['pagecount']; ?>
){
                   alert("你的数字过大");
                   document.getElementById("pageNow").value=pageNow.substring(0,pageNow.length-1);
               }
           }
       }else{
           alert("null");
       }
  }
</script>*}
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../js/my.js", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
        <?php $_from = $this->_tpl_vars['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mess']):
?>
        <tr>
            <td><?php echo $this->_tpl_vars['mess']['smamsg_id']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mess']['sender']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mess']['sendtime']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mess']['qetter']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mess']['content']; ?>
</td>
            <td><a href='../controller/DeleteControll.php?id=<?php echo $this->_tpl_vars['mess']['smamsg_id']; ?>
'>删除</a> </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>

</form>
<?php echo $this->_tpl_vars['navi']; ?>

</body>
</html>