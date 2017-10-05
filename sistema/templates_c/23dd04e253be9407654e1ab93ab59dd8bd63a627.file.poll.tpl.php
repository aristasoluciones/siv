<?php /* Smarty version Smarty3-b7, created on 2017-10-04 19:29:26
         compiled from "C:/wamp/www/siv/sistema/templates/lists/poll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56859d57ce6217520-29977647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23dd04e253be9407654e1ab93ab59dd8bd63a627' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/poll.tpl',
      1 => 1507162801,
    ),
  ),
  'nocache_hash' => '56859d57ce6217520-29977647',
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
            <th>Clave</th>
            <th>Nombre </th>
            <th>Fecha de Registro</th>
            <th>Vigencia de la Encuesta</th>
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
            <td><?php echo $_smarty_tpl->getVariable('key')->value+1;?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['fechaRegistro'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['inicio'];?>
 - <?php echo $_smarty_tpl->getVariable('item')->value['fin'];?>
</td>
			<td><div align="center">
				<a href="javascript:void(0)" class="btn btn-xs yellow"  onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['encuestaId'];?>
)" title="Editar">
					<i class="fa fa-pencil-square-o" ></i> 
				</a>
				
				 <a class="btn btn-xs red" href="javascript:void(0)" onClick="DeleteReg(<?php echo $_smarty_tpl->getVariable('item')->value['encuestaId'];?>
)" title="Eliminar">
					<i class="fa fa-trash" aria-hidden="true"></i>
				</a>
								
				<a class="btn btn-xs blue" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/question/x/<?php echo $_smarty_tpl->getVariable('item')->value['encuestaId'];?>
"  title="AGREGAR PREGUNTAS">
					<i class="fa fa-plus" aria-hidden="true"></i>
				</a>
				
				<a class="btn btn-xs green" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/question/x/<?php echo $_smarty_tpl->getVariable('item')->value['encuestaId'];?>
" title="Ver Resultado">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
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
<!--
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
-->