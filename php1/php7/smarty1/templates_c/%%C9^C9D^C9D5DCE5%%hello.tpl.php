<?php /* Smarty version 2.6.30, created on 2017-11-06 14:40:34
         compiled from hello.tpl */ ?>
<style type="text/css">
    body{
        background-color: darkgreen ;
    }
</style>

<h1>test1</h1>
<?php echo $this->_tpl_vars['var1']; ?>
<br>

Hello <?php echo $this->_tpl_vars['firstname']; ?>
, glad to see you could make it.
<p>
    Your last login was on <?php echo $this->_tpl_vars['lastLoginDate']; ?>
.