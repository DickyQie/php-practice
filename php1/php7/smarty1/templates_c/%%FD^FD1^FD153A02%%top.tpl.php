<?php /* Smarty version 2.6.30, created on 2017-11-08 04:36:18
         compiled from top.tpl */ ?>
<p>top  <?php echo $this->_tpl_vars['title']; ?>
</p>
<?php $_from = $this->_tpl_vars['a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['city']):
?>
    <?php echo $this->_tpl_vars['city']; ?>

    <?php endforeach; else: ?>
    <?php echo "没有值"; ?>

<?php endif; unset($_from); ?>