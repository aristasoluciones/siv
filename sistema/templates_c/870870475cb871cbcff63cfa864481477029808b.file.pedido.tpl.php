<?php /* Smarty version Smarty3-b7, created on 2017-09-30 11:20:28
         compiled from "C:/wamp/www/siv/sistema/templates/lists/pedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2877159cfc44c4e87e1-49223991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '870870475cb871cbcff63cfa864481477029808b' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/pedido.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '2877159cfc44c4e87e1-49223991',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table-container">
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<table class="table table-striped table-bordered table-hover" id="custom_table">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Nombre cliente</th>
            <th>Fecha </th>
			<th>Total </th>
			<th>Estado de pedido </th>
            <th>Acci&oacute;n </th>
        </tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros')->value['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>        	
        <tr>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['folio'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['cliente'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['fecha'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['total'];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('item')->value['estatus'];?>
</td>
            <td><div align="center">
                
                <?php if (in_array('del_pedido',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
                    <?php if ($_smarty_tpl->getVariable('item')->value['estatus']!='cancelado'){?>
                    <a href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['ventaId'];?>
)" title="Cancelar pedido">
                        <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/delete.png" border="0">
                    </a>
                    <?php }?>
                <?php }?>
                <?php if (in_array('ver_pedido',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/detalle-pedido/id/<?php echo $_smarty_tpl->getVariable('item')->value['ventaId'];?>
"  title="Ver pedido">
                    <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/view.png" border="0">
                </a>
                <?php }?>
                				
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
</div>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
