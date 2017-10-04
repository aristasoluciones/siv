<?php /* Smarty version Smarty3-b7, created on 2017-10-04 16:29:45
         compiled from "C:/wamp/www/siv/sistema/templates/lists/sucursal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2201259d552c9b14fc3-22929956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f3306592bb8b034f28ef0f9a72d82441ee64f4' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/sucursal.tpl',
      1 => 1507152406,
    ),
  ),
  'nocache_hash' => '2201259d552c9b14fc3-22929956',
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
            <th>Descripcion </th>
            <th>Encargado </th>
            <th>Direccion </th>
            <th>Horarios </th>
            <th>Status </th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['descripcion'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['encargado'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['direccion'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['horario'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['status'];?>
</td>
			<td><div align="center">
               <?php if (in_array('edit_sucursal',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
				<a class="btn btn-xs yellow" href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['sucursalid'];?>
)" title="Editar sucursal">
					<i class="fa fa-pencil-square-o" ></i> 
				</a>
                <?php }?>
				<?php if (in_array('active_sucursal',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
                    <?php if ($_smarty_tpl->getVariable('item')->value['status']=="Baja"){?>
                        <a class="btn btn-xs green" href="javascript:void(0)" onClick="ActiveReg(<?php echo $_smarty_tpl->getVariable('item')->value['sucursalid'];?>
)" title="Activar sucursal">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        </a>
                    <?php }else{ ?>
                    <a class="btn btn-xs red" href="javascript:void(0)" onClick="RemoveReg(<?php echo $_smarty_tpl->getVariable('item')->value['sucursalid'];?>
)" title="Desactivar sucursal">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
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