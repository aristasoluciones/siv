<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:10:44
         compiled from "C:/wamp/www/siv/sistema/templates/lists/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2940259d55c64cbb8a5-30305836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8401fa7938ed52000da020497b7d679d340b2f0' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/usuario.tpl',
      1 => 1507148042,
    ),
  ),
  'nocache_hash' => '2940259d55c64cbb8a5-30305836',
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
            <th>Nombre </th>
            <th>Telefono </th>
            <th>Email </th>
            <th>Usuario </th>
            <th>Tipo </th>
            <th>Status</th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['telefono'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['usuario'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['role_id'];?>
</td>
            <td><?php if ($_smarty_tpl->getVariable('item')->value['activo']){?>S&iacute;<?php }else{ ?>No<?php }?></td>
    
            <td><div align="center">
               <!--  <a href="javascript:void(0)" onClick="ViewReg(<?php echo $_smarty_tpl->getVariable('item')->value['idReg'];?>
)" title="Ver Detalles">
                <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/icons/view.png" border="0">
            </a> -->
            <?php if (in_array('edit_usuario',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
            <a class="btn btn-xs yellow" href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['usuarioId'];?>
)" title="Editar">                
				<i class="fa fa-pencil-square-o" ></i> 
            </a>
            <?php }?>
            <?php if (in_array('delet_usuario',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
            <a class="btn btn-xs red" href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['usuarioId'];?>
)" title="Eliminar">
                <i class="fa fa-trash" aria-hidden="true"></i>
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
<!-- <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
 -->