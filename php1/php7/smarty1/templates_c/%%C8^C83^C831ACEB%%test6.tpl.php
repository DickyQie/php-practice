<?php /* Smarty version 2.6.30, created on 2017-11-08 13:36:12
         compiled from test6.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'test6.tpl', 11, false),array('function', 'cycle', 'test6.tpl', 34, false),array('function', 'fetch', 'test6.tpl', 39, false),array('function', 'html_checkboxes', 'test6.tpl', 44, false),array('function', 'html_options', 'test6.tpl', 50, false),array('function', 'html_radios', 'test6.tpl', 54, false),array('function', 'html_select_date', 'test6.tpl', 56, false),array('function', 'html_select_time', 'test6.tpl', 57, false),array('function', 'html_table', 'test6.tpl', 61, false),array('function', 'mailto', 'test6.tpl', 64, false),array('function', 'popup_init', 'test6.tpl', 66, false),array('function', 'popup', 'test6.tpl', 68, false),array('block', 'textformat', 'test6.tpl', 84, false),)), $this); ?>
<?php $this->assign('aa', 'hello'); ?>
<p><?php echo $this->_tpl_vars['aa']; ?>
</p>

<p>counter相当于计数器,start起始值,skip记数器间隔、步长,print:是否输出值</p>

<?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'assign' => 'mycounter','print' => false), $this);?>
<br>


<table border="1" width="500px">
    <tr><td>id</td><td>name</td><td>nickname</td></tr>
    <?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sing']):
?>
    <?php echo smarty_function_counter(array(), $this);?>

    <?php if ((1 & $this->_tpl_vars['mycounter'])): ?>
    <tr bgcolor="#8a2be2"><td><?php echo $this->_tpl_vars['sing']['id']; ?>
</td><td><?php echo $this->_tpl_vars['sing']['name']; ?>
</td><td><?php echo $this->_tpl_vars['sing']['nickname']; ?>
</td></tr>
    <?php endif; ?>
    <?php if (!(1 & $this->_tpl_vars['mycounter'])): ?>
    <tr bgcolor="aqua"><td><?php echo $this->_tpl_vars['sing']['id']; ?>
</td><td><?php echo $this->_tpl_vars['sing']['name']; ?>
</td><td><?php echo $this->_tpl_vars['sing']['nickname']; ?>
</td></tr>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</table>


<p>cycle</p>

<table border="1" width="500px">
    <tr><td>id</td><td>name</td><td>nickname</td></tr>
    <?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sing']):
?>
    <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#8a2be2,aqua"), $this);?>
"><td><?php echo $this->_tpl_vars['sing']['id']; ?>
</td><td><?php echo $this->_tpl_vars['sing']['name']; ?>
</td><td><?php echo $this->_tpl_vars['sing']['nickname']; ?>
</td></tr>
    <?php endforeach; endif; unset($_from); ?>
</table>

<p>fetch：抓取文件 看成在 TestController5.php中来取路径</p>
<?php echo smarty_function_fetch(array('file' => "aa.txt"), $this);?>
<br>
<?php echo smarty_function_fetch(array('file' => "./templates/aa.txt"), $this);?>


<p>html_checkboxs:数据创建复选按钮组 </p>
<form action="/PhpPrimary/php1/php7/smarty1/TestControll6post.php" method="post">
<?php echo smarty_function_html_checkboxes(array('options' => $this->_tpl_vars['arr2'],'name' => 'hobby','separator' => "----",'selected' => $this->_tpl_vars['arr3']), $this);?>

 <input type="submit" value="提交">
</form>

<p>html_options</p>
<select name="myhobby" multiple>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arr2'],'selected' => $this->_tpl_vars['arr3']), $this);?>

</select>

<p>html_radio</p>
<?php echo smarty_function_html_radios(array('name' => 'id','options' => $this->_tpl_vars['arr4'],'checked' => 'b','separator' => "&nbsp;"), $this);?>

<br>
<?php echo smarty_function_html_select_date(array('start_year' => '2012'), $this);?>
<br>
<?php echo smarty_function_html_select_time(array('use_24_hours' => true), $this);?>



<p>html_table</p>
<?php echo smarty_function_html_table(array('loop' => $this->_tpl_vars['arr5'],'cols' => 3,'table_attr' => 'border="1"','tr_attr' => 'bgcolor="red"'), $this);?>


<p>mailto 联系管理员  火狐IE看效果</p>
<?php echo smarty_function_mailto(array('address' => 'zhangqiem@126.com','text' => "联系管理员",'subject' => 'hello'), $this);?>

<br>
<?php echo smarty_function_popup_init(array('src' => "./js/overlib.js"), $this);?>


<a href="#" <?php echo smarty_function_popup(array('text' => "<ul><li>支持文本</li><li>支持超文本</li><li><img src='./js/nm.jpg' width='200'/></li></ul>",'caption' => "我是窗口",'width' => 300,'fgcolor' => 'red','sticky' => true,'textcolor' => 'blue','snapx' => 110), $this);?>
>书本信息</a>


<br>
<br>

<?php $this->_tag_stack[] = array('textformat', array('wrap' => 40)); $_block_repeat=true;smarty_block_textformat($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

This is foo.
This is foo.
This is foo.
This is foo.
This is foo.
This is foo.

This is bar.

bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_textformat($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<br>
<br>
<br>



