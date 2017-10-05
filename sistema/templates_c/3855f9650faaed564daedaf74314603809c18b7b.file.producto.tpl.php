<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:24:50
         compiled from "C:/wamp/www/siv/sistema/templates/lists/producto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3018159d55fb2b3ce22-79993757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3855f9650faaed564daedaf74314603809c18b7b' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/producto.tpl',
      1 => 1507153886,
    ),
  ),
  'nocache_hash' => '3018159d55fb2b3ce22-79993757',
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
            <th>Descripcion </th>
			<th>A quien va dirigido </th>
			<th>Ventas </th>
            <th>Imagen </th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['descripcion'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['aquien'];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('item')->value['ventajas'];?>
</td>
            <td>
            <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT_IMG')->value;?>
/categorias/<?php echo $_smarty_tpl->getVariable('item')->value['imagen'];?>
.<?php echo $_smarty_tpl->getVariable('item')->value['tipo'];?>
"  title="Ver imagen" target="_blank">
                <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT_IMG')->value;?>
/categorias/<?php echo $_smarty_tpl->getVariable('item')->value['imagen'];?>
.<?php echo $_smarty_tpl->getVariable('item')->value['tipo'];?>
" height="50px" width="100px">
                </a>
             </td>
            <td><div align="center">
                <?php if (in_array('edit_categoria',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
				<a class="btn btn-xs yellow" href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['categoriaId'];?>
)" title="Editar categoria">
					<i class="fa fa-pencil-square-o" ></i> 
				</a>
                <?php }?>
                <?php if (in_array('add_pcategoria',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
                <a class="btn btn-xs green" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/producto_cat/id/<?php echo $_smarty_tpl->getVariable('item')->value['categoriaId'];?>
"  title="Agregar producto">
                   <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
                <?php }?>
                 <?php if (in_array('del_categoria',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?>
                <a class="btn btn-xs red" href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['categoriaId'];?>
)" title="Eliminar categoria">
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