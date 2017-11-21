<?php /* Smarty version 2.6.30, created on 2017-11-08 14:44:16
         compiled from ../templates/test2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', '../templates/test2.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "../config/my.conf"), $this);?>



<body bgcolor='<?php echo $this->_config[0]['vars']['color']; ?>
'>
<h1>内建函数</h1>
<p>取一维索引数组</p>
<?php $_from = $this->_tpl_vars['arr1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ll'] => $this->_tpl_vars['temp']):
?>
    <?php echo $this->_tpl_vars['ll']; ?>
=><?php echo $this->_tpl_vars['temp']; ?>

<?php endforeach; endif; unset($_from); ?>
<p>取一维关联数组</p>
<?php $_from = $this->_tpl_vars['arr2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['temp']):
?>
   <?php echo $this->_tpl_vars['k']; ?>
=><?php echo $this->_tpl_vars['temp']; ?>

<?php endforeach; endif; unset($_from); ?>

<p>取二维索引数组</p>
<?php $_from = $this->_tpl_vars['arr3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['temp']):
?>
    <?php $_from = $this->_tpl_vars['temp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
       <?php echo $this->_tpl_vars['val']; ?>

    <?php endforeach; endif; unset($_from); ?>
    <br>
<?php endforeach; endif; unset($_from); ?>

<p>取二维关联索引数组</p>
<?php $_from = $this->_tpl_vars['arr4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['temp']):
?>
    <?php $_from = $this->_tpl_vars['temp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['val']):
?>
        <?php if ($this->_tpl_vars['k'] != 'b'): ?>
            <?php echo $this->_tpl_vars['k']; ?>
=><?php echo $this->_tpl_vars['val']; ?>

        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
<br>
<?php endforeach; endif; unset($_from); ?>


<p>取二维关联关联数组</p>
<?php $_from = $this->_tpl_vars['arr5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['temp']):
?>
    <?php $_from = $this->_tpl_vars['temp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['val']):
?>
        <?php echo $this->_tpl_vars['k']; ?>
=><?php echo $this->_tpl_vars['val']; ?>

    <?php endforeach; endif; unset($_from); ?>
<br>
    <?php endforeach; endif; unset($_from); ?>

<p>if elseif else</p>
<?php if ($this->_tpl_vars['num'] > 0 && $this->_tpl_vars['num'] <= 5): ?>
    你的数字小于5====<?php echo $this->_tpl_vars['num']; ?>

<?php elseif ($this->_tpl_vars['num'] > 5 && $this->_tpl_vars['num'] < 10): ?>
    你的数字大于5====<?php echo $this->_tpl_vars['num']; ?>

<?php else: ?>
    你的数字大于10====<?php echo $this->_tpl_vars['num']; ?>

<?php endif; ?>
</body>