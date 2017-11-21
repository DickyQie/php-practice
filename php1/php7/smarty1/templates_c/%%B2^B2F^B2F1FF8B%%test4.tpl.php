<?php /* Smarty version 2.6.30, created on 2017-11-08 03:59:07
         compiled from test4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'test4.tpl', 9, false),array('modifier', 'count_characters', 'test4.tpl', 9, false),array('modifier', 'mycap', 'test4.tpl', 11, false),array('modifier', 'count_paragraphs', 'test4.tpl', 13, false),array('modifier', 'count_sentences', 'test4.tpl', 15, false),array('modifier', 'count_words', 'test4.tpl', 17, false),array('modifier', 'date_format', 'test4.tpl', 19, false),array('modifier', 'default', 'test4.tpl', 23, false),array('modifier', 'escape', 'test4.tpl', 25, false),array('modifier', 'nl2br', 'test4.tpl', 27, false),array('modifier', 'regex_replace', 'test4.tpl', 29, false),array('modifier', 'spacify', 'test4.tpl', 31, false),array('modifier', 'strip', 'test4.tpl', 33, false),array('modifier', 'truncate', 'test4.tpl', 35, false),array('modifier', 'truncateutf8', 'test4.tpl', 40, false),array('modifier', 'wordwrap', 'test4.tpl', 42, false),array('modifier', 'ismail', 'test4.tpl', 45, false),array('modifier', 'upper', 'test4.tpl', 47, false),)), $this); ?>
<h6>计算所得税</h6>
<?php echo $this->_tpl_vars['sal']*0.85+300-22; ?>


<h6>取常量</h6>
<?php echo @TMAX; ?>
<br>
<?php echo @TMAX*5; ?>


<h6>变量调节器</h6>
<?php echo ((is_array($_tmp=$this->_tpl_vars['a'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
   长度：<?php echo ((is_array($_tmp=$this->_tpl_vars['a'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)); ?>

<h6>自定义调节器多个参数</h6>
<?php echo ((is_array($_tmp='aFFFB')) ? $this->_run_mod_handler('mycap', true, $_tmp, 'hello') : smarty_modifier_mycap($_tmp, 'hello')); ?>
<br>

<p>统计段落数：<?php echo ((is_array($_tmp=$this->_tpl_vars['articleTitle'])) ? $this->_run_mod_handler('count_paragraphs', true, $_tmp) : smarty_modifier_count_paragraphs($_tmp)); ?>
</p>

<p>统计句数：<?php echo ((is_array($_tmp=$this->_tpl_vars['articleTitle'])) ? $this->_run_mod_handler('count_sentences', true, $_tmp) : smarty_modifier_count_sentences($_tmp)); ?>
</p>

<p>统计单词个数：<?php echo ((is_array($_tmp=$this->_tpl_vars['articleTitle'])) ? $this->_run_mod_handler('count_words', true, $_tmp) : smarty_modifier_count_words($_tmp)); ?>
</p>

<p>当前时间:<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</p>
<p>time：<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %A") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %A")); ?>
</p>
<p>当前时间:<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : smarty_modifier_date_format($_tmp, "%H:%M:%S")); ?>
</p>

<p>default: <?php echo ((is_array($_tmp=@$this->_tpl_vars['aa'])) ? $this->_run_mod_handler('default', true, $_tmp, "默认值") : smarty_modifier_default($_tmp, "默认值")); ?>
</p>

<p>html文本输出  escape: <?php echo ((is_array($_tmp=$this->_tpl_vars['bb'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>

<p>换行符：<?php echo ((is_array($_tmp=$this->_tpl_vars['cc'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<p>正则：<?php echo ((is_array($_tmp=$this->_tpl_vars['dd'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/(\d\d\d\d)/", "四个数字") : smarty_modifier_regex_replace($_tmp, "/(\d\d\d\d)/", "四个数字")); ?>
</p>

<p>插空：<?php echo ((is_array($_tmp=$this->_tpl_vars['dd'])) ? $this->_run_mod_handler('spacify', true, $_tmp, "^^") : smarty_modifier_spacify($_tmp, "^^")); ?>
</p>

<p>去空格替换其他：<?php echo ((is_array($_tmp=$this->_tpl_vars['ee'])) ? $this->_run_mod_handler('strip', true, $_tmp, "--") : smarty_modifier_strip($_tmp, "--")); ?>
</p>

<p>截取：<?php echo ((is_array($_tmp=$this->_tpl_vars['ff'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 6) : smarty_modifier_truncate($_tmp, 6)); ?>
</p>

<p>截取(中文乱码)：<?php echo ((is_array($_tmp=$this->_tpl_vars['ff'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 6, "---") : smarty_modifier_truncate($_tmp, 6, "---")); ?>
</p>
<p>截取：<?php echo ((is_array($_tmp=$this->_tpl_vars['ff'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 6, "", true) : smarty_modifier_truncate($_tmp, 6, "", true)); ?>
</p>

<p>截取(解决中文乱码)：<?php echo ((is_array($_tmp=$this->_tpl_vars['ff1'])) ? $this->_run_mod_handler('truncateutf8', true, $_tmp, 8) : smarty_modifier_truncateutf8($_tmp, 8)); ?>
</p>

<p>行宽约束：<?php echo ((is_array($_tmp=$this->_tpl_vars['gg'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 10) : smarty_modifier_wordwrap($_tmp, 10)); ?>
</p>
<p>行宽约束：<?php echo ((is_array($_tmp=$this->_tpl_vars['gg'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 20, "<br>\n") : smarty_modifier_wordwrap($_tmp, 20, "<br>\n")); ?>
</p>

<p>测试邮箱 <?php echo ((is_array($_tmp="zz@qq.com")) ? $this->_run_mod_handler('ismail', true, $_tmp) : smarty_modifier_ismail($_tmp)); ?>
</p>

<p>组合使用<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['a'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('spacify', true, $_tmp, "^") : smarty_modifier_spacify($_tmp, "^")))) ? $this->_run_mod_handler('truncate', true, $_tmp, 8) : smarty_modifier_truncate($_tmp, 8)); ?>
</p>
