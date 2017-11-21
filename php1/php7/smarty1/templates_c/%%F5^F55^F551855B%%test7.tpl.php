<?php /* Smarty version 2.6.30, created on 2017-11-08 14:58:07
         compiled from test7.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'mytime', 'test7.tpl', 8, false),array('insert', 'mycount', 'test7.tpl', 12, false),array('modifier', 'date_format', 'test7.tpl', 9, false),)), $this); ?>
<?php $this->assign('aa', 'hello'); ?>
<p><?php echo $this->_tpl_vars['aa']; ?>
</p>

<?php echo $this->_tpl_vars['arr'][1]; ?>




<p>当前时间:<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'mytime')), $this); ?>
</p>
<p>time：<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %A") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %A")); ?>
</p>
<p>当前时间:<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : smarty_modifier_date_format($_tmp, "%H:%M:%S")); ?>
</p>

<p>访问该页面的次数是：<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'mycount')), $this); ?>
</p>


<?php $_from = $this->_tpl_vars['aaa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
    <?php echo $this->_tpl_vars['val']; ?>

<?php endforeach; endif; unset($_from); ?>
<br>
<?php $_from = $this->_tpl_vars['bb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
    <?php echo $this->_tpl_vars['val']['a']; ?>
 -- <?php echo $this->_tpl_vars['val']['b']; ?>
 -- <?php echo $this->_tpl_vars['val']['c']; ?>

    <br>
<?php endforeach; endif; unset($_from); ?>
