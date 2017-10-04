<?php /* Smarty version Smarty3-b7, created on 2017-10-03 19:44:48
         compiled from "C:/wamp/www/siv/sistema/templates/boxes/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1317559d42f0083b052-01011747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf97627d1b72fa4b6b787fa865f19b82c749cfe' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/boxes/messages.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '1317559d42f0083b052-01011747',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('errors')->value['value'])>0){?>
<div class="alert alert-success">
    <button class="close" data-dismiss="alert"></button>
     <?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value){
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["error"]->key;
?>
    	<strong>!Exito!</strong> <?php echo $_smarty_tpl->getVariable('error')->value;?>
  
	<?php }} ?>
</div>
<?php }?>