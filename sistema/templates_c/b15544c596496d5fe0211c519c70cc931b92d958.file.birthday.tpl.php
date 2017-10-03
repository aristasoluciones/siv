<?php /* Smarty version Smarty3-b7, created on 2017-09-30 14:20:53
         compiled from "C:/wamp/www/siv/sistema/templates/lists/birthday.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2228459cfee95bc7543-72705593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b15544c596496d5fe0211c519c70cc931b92d958' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/birthday.tpl',
      1 => 1506799251,
    ),
  ),
  'nocache_hash' => '2228459cfee95bc7543-72705593',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1 class="page-title"><b>Mes Actual</b>
<small></small>
</h1>
<div class="table-container">
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['actual']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
	<b><?php echo $_smarty_tpl->getVariable('item')->value['fechaNacimiento'];?>
</b><br>
	
<table class="table table-striped table-bordered table-hover" 0>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre </th>
            <th>Total de Pedidos </th>
            <th>Importe Total de Pedidos </th>
            <th>Colonia </th>
            <th>Email </th>
            <th>Acci&oacute;n </th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['itemc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['clientes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['itemc']->key => $_smarty_tpl->tpl_vars['itemc']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['itemc']->key;
?>        	
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('key')->value+1;?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['nombre'];?>
 <?php echo $_smarty_tpl->getVariable('itemc')->value['apaterno'];?>
 <?php echo $_smarty_tpl->getVariable('itemc')->value['amaterno'];?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['total'];?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['total'];?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['total'];?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['email'];?>
</td>
				<td><div align="center">
	  
						<a href="javascript:void(0)"  onClick="ActiveReg(<?php echo $_smarty_tpl->getVariable('itemc')->value['clienteId'];?>
)" title="ENVIAR CORREO">
							<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/email.png" border="0">
						</a>

				</div>
				</td>
			</tr>
			<?php }} else { ?>
			<tr>
				<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }} ?>
</div>
<h1 class="page-title"><b>Proximo Mes</b>
<small></small>
</h1>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['proximo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
<b><?php echo $_smarty_tpl->getVariable('item')->value['fechaNacimiento'];?>
</b><br>	
<table class="table table-striped table-bordered table-hover" 0>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre </th>
            <th>Total de Pedidos </th>
            <th>Importe Total de Pedidos </th>
            <th>Colonia </th>
            <th>Email </th>
            <th>Acci&oacute;n </th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['itemc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['clientes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['itemc']->key => $_smarty_tpl->tpl_vars['itemc']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['itemc']->key;
?>        	
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('key')->value+1;?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['nombre'];?>
 <?php echo $_smarty_tpl->getVariable('itemc')->value['apaterno'];?>
 <?php echo $_smarty_tpl->getVariable('itemc')->value['amaterno'];?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['total'];?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['total'];?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['total'];?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('itemc')->value['email'];?>
</td>
				<td><div align="center">
	  
						<a href="javascript:void(0)" onClick="ActiveReg(<?php echo $_smarty_tpl->getVariable('itemc')->value['clienteId'];?>
)" title="ENVIAR CORREO">
							<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/email.png" border="0">
							
						</a>

				</div>
				</td>
			</tr>
			<?php }} else { ?>
			<tr>
				<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }} ?>
<!--
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
-->