<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:19:50
         compiled from "C:/wamp/www/siv/sistema/templates/lists/order-ubication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2689059d55e8600f887-93284155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cb541bdad1706a20315bc7291d75ce56b7412a3' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/order-ubication.tpl',
      1 => 1506973891,
    ),
  ),
  'nocache_hash' => '2689059d55e8600f887-93284155',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table-container">
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<table class="table table-striped table-bordered table-hover" >
    <thead>
        <tr>
            <th>#</th>
            <th>Colonia </th>
            <th>Hombres  </th>
            <th>Mujeres</th>
            <th>Total Personas </th>
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>        	
        <tr>
            <td><?php echo $_smarty_tpl->getVariable('key')->value+1;?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombreColonia'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['hombres'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['mujeres'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['total'];?>
</td>
			
        </tr>
        <?php }} else { ?>
        <tr>
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<!--
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
-->