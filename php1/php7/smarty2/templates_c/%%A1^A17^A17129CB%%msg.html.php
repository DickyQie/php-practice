<?php /* Smarty version 2.6.30, created on 2017-11-07 10:02:16
         compiled from msg.html */ ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>信息列表界面</title>
</head>
<body>
<form action="../controller/LoginController.php" method="post">
    <a href="">发布信息</a>&nbsp;&nbsp;
    <a href="">退出系统</a>
    <table border="1px" cellpadding="1px" cellspacing="1px" width="500px">
        <tr><td colspan="4">内部留言板</td></tr>
        <tr>
            <td>发送人:</td>
            <td>时间:</td>
            <td>接收人:</td>
            <td>内容:</td>
        </tr>
        <?php $_from = $this->_tpl_vars['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mess']):
?>
        <tr>
            <td><?php echo $this->_tpl_vars['mess']['sender']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mess']['sendtime']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mess']['qetter']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mess']['content']; ?>
</td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
</form>
</body>
</html>