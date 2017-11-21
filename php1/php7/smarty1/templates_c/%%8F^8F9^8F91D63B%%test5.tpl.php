<?php /* Smarty version 2.6.30, created on 2017-11-08 07:50:24
         compiled from test5.tpl */ ?>

<?php ob_start(); ?>
    我的capture
<?php $this->_smarty_vars['capture']['banner'] = ob_get_contents(); ob_end_clean(); ?>
<p><?php echo $this->_smarty_vars['capture']['banner']; ?>
</p>

<?php $_from = $this->_tpl_vars['a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['city']):
?>
    <?php echo $this->_tpl_vars['city']; ?>

<?php endforeach; else: ?>
<?php echo "没有值"; ?>

<?php endif; unset($_from); ?>

<?php if ((1 & '2')): ?>
    <p>是一个奇数</p>
<?php else: ?>
    <p>是一个偶数</p>
<?php endif; ?>

<p>分隔符：输出 <{ }>  </p>

<p>数据将被当作文本处理</p>
<?php echo '
<{$hello}>
'; ?>


<p>section 用于遍历数组中的数据</p>
<?php unset($this->_sections['city']);
$this->_sections['city']['name'] = 'city';
$this->_sections['city']['start'] = (int)'0';
$this->_sections['city']['step'] = ((int)'2') == 0 ? 1 : (int)'2';
$this->_sections['city']['loop'] = is_array($_loop=$this->_tpl_vars['arr1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['city']['show'] = true;
$this->_sections['city']['max'] = $this->_sections['city']['loop'];
if ($this->_sections['city']['start'] < 0)
    $this->_sections['city']['start'] = max($this->_sections['city']['step'] > 0 ? 0 : -1, $this->_sections['city']['loop'] + $this->_sections['city']['start']);
else
    $this->_sections['city']['start'] = min($this->_sections['city']['start'], $this->_sections['city']['step'] > 0 ? $this->_sections['city']['loop'] : $this->_sections['city']['loop']-1);
if ($this->_sections['city']['show']) {
    $this->_sections['city']['total'] = min(ceil(($this->_sections['city']['step'] > 0 ? $this->_sections['city']['loop'] - $this->_sections['city']['start'] : $this->_sections['city']['start']+1)/abs($this->_sections['city']['step'])), $this->_sections['city']['max']);
    if ($this->_sections['city']['total'] == 0)
        $this->_sections['city']['show'] = false;
} else
    $this->_sections['city']['total'] = 0;
if ($this->_sections['city']['show']):

            for ($this->_sections['city']['index'] = $this->_sections['city']['start'], $this->_sections['city']['iteration'] = 1;
                 $this->_sections['city']['iteration'] <= $this->_sections['city']['total'];
                 $this->_sections['city']['index'] += $this->_sections['city']['step'], $this->_sections['city']['iteration']++):
$this->_sections['city']['rownum'] = $this->_sections['city']['iteration'];
$this->_sections['city']['index_prev'] = $this->_sections['city']['index'] - $this->_sections['city']['step'];
$this->_sections['city']['index_next'] = $this->_sections['city']['index'] + $this->_sections['city']['step'];
$this->_sections['city']['first']      = ($this->_sections['city']['iteration'] == 1);
$this->_sections['city']['last']       = ($this->_sections['city']['iteration'] == $this->_sections['city']['total']);
?>
    name:<?php echo $this->_tpl_vars['arr1'][$this->_sections['city']['index']]; ?>

<?php endfor; endif; ?>

<br>
<?php unset($this->_sections['nmen']);
$this->_sections['nmen']['name'] = 'nmen';
$this->_sections['nmen']['loop'] = is_array($_loop=$this->_tpl_vars['arr2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nmen']['show'] = true;
$this->_sections['nmen']['max'] = $this->_sections['nmen']['loop'];
$this->_sections['nmen']['step'] = 1;
$this->_sections['nmen']['start'] = $this->_sections['nmen']['step'] > 0 ? 0 : $this->_sections['nmen']['loop']-1;
if ($this->_sections['nmen']['show']) {
    $this->_sections['nmen']['total'] = $this->_sections['nmen']['loop'];
    if ($this->_sections['nmen']['total'] == 0)
        $this->_sections['nmen']['show'] = false;
} else
    $this->_sections['nmen']['total'] = 0;
if ($this->_sections['nmen']['show']):

            for ($this->_sections['nmen']['index'] = $this->_sections['nmen']['start'], $this->_sections['nmen']['iteration'] = 1;
                 $this->_sections['nmen']['iteration'] <= $this->_sections['nmen']['total'];
                 $this->_sections['nmen']['index'] += $this->_sections['nmen']['step'], $this->_sections['nmen']['iteration']++):
$this->_sections['nmen']['rownum'] = $this->_sections['nmen']['iteration'];
$this->_sections['nmen']['index_prev'] = $this->_sections['nmen']['index'] - $this->_sections['nmen']['step'];
$this->_sections['nmen']['index_next'] = $this->_sections['nmen']['index'] + $this->_sections['nmen']['step'];
$this->_sections['nmen']['first']      = ($this->_sections['nmen']['iteration'] == 1);
$this->_sections['nmen']['last']       = ($this->_sections['nmen']['iteration'] == $this->_sections['nmen']['total']);
?>
<?php echo $this->_tpl_vars['arr2'][$this->_sections['nmen']['index']]['a']; ?>
---<?php echo $this->_tpl_vars['arr2'][$this->_sections['nmen']['index']]['b']; ?>
<br>
<?php endfor; endif; ?>

<p>strip:空格和回车影响HTML输出的情形</p>
<?php echo '<table border=0><tr><td><A HREF="{$url}"><font color="red">This is a test</font></A></td></tr></table>'; ?>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.tpl", 'smarty_include_vars' => array('title' => "我是标题")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p>index</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


