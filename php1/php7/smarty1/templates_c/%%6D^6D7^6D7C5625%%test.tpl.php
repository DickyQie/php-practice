<?php /* Smarty version 2.6.30, created on 2017-11-08 15:19:48
         compiled from test.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'test.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "../config/my.conf"), $this);?>




<body bgcolor='<?php echo $this->_config[0]['vars']['color']; ?>
'>
<h1>显示数据</h1>

<p><?php echo $this->_tpl_vars['aa']; ?>
</p>
<p><?php echo $this->_tpl_vars['bb']; ?>
</p>
<p><?php echo $this->_tpl_vars['cc']; ?>
</p>
<p><?php echo $this->_tpl_vars['dd']; ?>
</p>

<p>数组1 <?php echo $this->_tpl_vars['arr1'][0]; ?>
 --- <?php echo $this->_tpl_vars['arr1'][1]; ?>
 --- <?php echo $this->_tpl_vars['arr1'][2]; ?>
   --- <?php echo $this->_tpl_vars['arr1'][3]; ?>
</p>

<p>数组2 <?php echo $this->_tpl_vars['arr2']['a']; ?>
 --- <?php echo $this->_tpl_vars['arr2']['b']; ?>
 </p>

<p>二维数组1 <?php echo $this->_tpl_vars['arr3'][0][0]; ?>
 --- <?php echo $this->_tpl_vars['arr3'][0][1]; ?>
 --- <?php echo $this->_tpl_vars['arr3'][1][1]; ?>
 --- <?php echo $this->_tpl_vars['arr3'][1][2]; ?>
</p>

<p>二维数组2 <?php echo $this->_tpl_vars['arr4'][0]['a']; ?>
 --- <?php echo $this->_tpl_vars['arr4'][0]['b']; ?>
 --- <?php echo $this->_tpl_vars['arr4'][1]['c']; ?>
 --- <?php echo $this->_tpl_vars['arr4'][1]['a']; ?>
</p>

<p>二维数组3 <?php echo $this->_tpl_vars['arr5']['aa']['a']; ?>
 --- <?php echo $this->_tpl_vars['arr5']['aa']['b']; ?>
 --- <?php echo $this->_tpl_vars['arr5']['bb']['c']; ?>
 --- <?php echo $this->_tpl_vars['arr5']['bb']['a']; ?>
</p>

<p>二维数组4 <?php echo $this->_tpl_vars['arr6']['aa'][0]; ?>
 --- <?php echo $this->_tpl_vars['arr6']['aa'][1]; ?>
 --- <?php echo $this->_tpl_vars['arr6']['bb'][2]; ?>
 --- <?php echo $this->_tpl_vars['arr6']['bb'][0]; ?>
</p>

<p><?php echo $this->_tpl_vars['obj']->name; ?>
 -- <?php echo $this->_tpl_vars['obj']->age; ?>
 -- <?php echo $this->_tpl_vars['obj']->color; ?>
 -- <?php echo $this->_tpl_vars['obj']->arr[0]; ?>
</p>

<p><?php echo $this->_tpl_vars['obj']->name; ?>
 -- <?php echo $this->_tpl_vars['obj']->arr2[1]['a']; ?>
</p>

<p><?php echo $this->_tpl_vars['obj']->master->name; ?>
  --- <?php echo $this->_tpl_vars['obj']->master->address; ?>
 </p>

<p>1:<?php echo $this->_tpl_vars['obj']->showM(); ?>
</p>


<p><?php echo $this->_config[0]['vars']['title']; ?>
</p>

<p>get:<?php echo $_GET['username']; ?>
</p>

<p>server:<?php echo $_SERVER['SERVER_NAME']; ?>
</p>

</body>