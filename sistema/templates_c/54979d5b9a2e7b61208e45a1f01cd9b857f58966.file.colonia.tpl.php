<?php /* Smarty version Smarty3-b7, created on 2017-10-04 04:16:18
         compiled from "C:/wamp/www/siv/sistema/templates/lists/colonia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1054359d4a6e23c52c3-78756693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54979d5b9a2e7b61208e45a1f01cd9b857f58966' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/colonia.tpl',
      1 => 1506060385,
    ),
  ),
  'nocache_hash' => '1054359d4a6e23c52c3-78756693',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table-container">
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<table class="table table-striped table-bordered table-hover" id="">
    <thead>
        <tr>
            <th>Nombre </th>
            <th>Municipio </th>            
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombreColonia'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>           
            
    
            <td><div align="center">
				<a class="btn btn-xs yellow" href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['coloniaId'];?>
)" title="Editar">
					<i class="fa fa-pencil-square-o" ></i> 
			    </a>
				<a class="btn btn-xs red" href="javascript:void(0)" onclick="DeleteReg('<?php echo $_smarty_tpl->getVariable('item')->value['coloniaId'];?>
')" title="Eliminar">
					<i class="fa fa-trash" aria-hidden="true"></i>
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
</div>
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
