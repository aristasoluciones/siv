<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:21:48
         compiled from "C:/wamp/www/siv/sistema/templates/lists/cliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1182159d55efc05b9a2-19491699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dc73d91f05d145babd6bad30f33853d2564286a' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/cliente.tpl',
      1 => 1507153886,
    ),
  ),
  'nocache_hash' => '1182159d55efc05b9a2-19491699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table-container">
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre </th>
            <th>Apellido paterno </th>
            <th>Apellido materno </th>
            <th>Email </th>
            <th>Activo </th>
            <th>Acci&oacute;n </th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['apaterno'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['amaterno'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['activo'];?>
</td>
			<td><div align="center">
               <?php if (in_array('edit_cliente',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
				<a class="btn btn-xs yellow" href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['clienteId'];?>
)" title="Editar cliente">
					<i class="fa fa-pencil-square-o" ></i> 
				</a>
                <?php }?>
				<?php if (in_array('active_cliente',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
                    <?php if ($_smarty_tpl->getVariable('item')->value['activo']=="no"){?>
                        <a class="btn btn-xs green" href="javascript:void(0)" onClick="ActiveReg(<?php echo $_smarty_tpl->getVariable('item')->value['clienteId'];?>
)" title="Activar cliente">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                        </a>
                    <?php }else{ ?>
                    <a class="btn btn-xs red" href="javascript:void(0)" onClick="RemoveReg(<?php echo $_smarty_tpl->getVariable('item')->value['clienteId'];?>
)" title="Dar de baja cliente">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    <?php }?>
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
<!--
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
-->