<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:24:41
         compiled from "C:/wamp/www/siv/sistema/templates/lists/imagenes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2296059d55fa9ed9e26-61761333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c2f2ed90c7822e58e0b8973162b7e18d2443617' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/imagenes.tpl',
      1 => 1507153886,
    ),
  ),
  'nocache_hash' => '2296059d55fa9ed9e26-61761333',
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
            <th>Tipo </th>
            <th>Descripcion</th>
            <th>Vista Previa</th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['tipo'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['descripcion'];?>
</td>
            <td>
				<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/slider/<?php echo $_smarty_tpl->getVariable('item')->value['ruta'];?>
?<?php echo $_smarty_tpl->getVariable('rand')->value;?>
"  style=" height: auto; 
					width: auto; 
					max-width: 100px; 
					max-height: 100px;" >
			</td>
            <td><div align="center">
                <?php if (in_array('edit_producto',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('typeUser')->value==1){?>
				<a class="btn btn-xs red" href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['imagenId'];?>
)" title="Editar producto">
					<i class="fa fa-pencil-square-o" ></i>
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