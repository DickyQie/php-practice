<?php /* Smarty version 2.6.30, created on 2017-11-07 04:34:27
         compiled from test3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'zq', 'test3.tpl', 5, false),array('function', 'jisuan', 'test3.tpl', 13, false),array('function', 'zhangqie', 'test3.tpl', 17, false),array('function', 'html_select_date', 'test3.tpl', 26, false),array('function', 'html_select_time', 'test3.tpl', 27, false),array('block', 'fun1', 'test3.tpl', 8, false),array('block', 'zhangq', 'test3.tpl', 21, false),)), $this); ?>


<body bgcolor='<?php echo $this->_config[0]['vars']['color']; ?>
'>
<h2>自定义函数</h2>
<?php echo test(array('con' => 'hello','color' => 'red','size' => '3'), $this);?>


<h2>块自定义函数</h2>
<?php $this->_tag_stack[] = array('fun1', array('color' => 'blue','size' => '3')); $_block_repeat=true;test2($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    hello,zhangqie
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo test2($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<h2>练习</h2>
<?php echo test3(array('num1' => '3','num2' => '3','oper' => "/"), $this);?>



<h2>自定义插件函数  在libs下面的plugins下的function_zhangqie 文件下</h2>
<?php echo smarty_function_zhangqie(array('con' => 'hello','color' => 'green','size' => '3'), $this);?>



<h2>自定义插件块函数  在libs下面的plugins下的block_zhangq 文件下</h2>
<?php $this->_tag_stack[] = array('zhangq', array('color' => 'blue','size' => '3')); $_block_repeat=true;smarty_block_zhangq($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    hello,zhangqie
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_zhangq($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<h2>直接调用smarty提供的标签</h2>
<?php echo smarty_function_html_select_date(array('prefix' => 'StartDate','time' => $this->_tpl_vars['time'],'start_year' => "-5",'end_year' => "+1",'display_days' => true), $this);?>

<?php echo smarty_function_html_select_time(array('use_24_hours' => true), $this);?>


</body>