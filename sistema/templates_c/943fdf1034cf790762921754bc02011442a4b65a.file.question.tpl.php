<?php /* Smarty version Smarty3-b7, created on 2017-10-04 19:17:34
         compiled from "C:/wamp/www/siv/sistema/templates/lists/question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:576659d57a1e5be9d3-16287508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '943fdf1034cf790762921754bc02011442a4b65a' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/question.tpl',
      1 => 1507162652,
    ),
  ),
  'nocache_hash' => '576659d57a1e5be9d3-16287508',
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
            <th>Pregunta </th>
            <th>Tipo</th>
            <th>Parametros</th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['preguntaId'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['pregunta'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['tiporespuesta'];?>
</td>
            <td>
				<?php echo $_smarty_tpl->getVariable('item')->value['parametros'];?>

					<?php if ($_smarty_tpl->getVariable('item')->value['tiporespuesta']=="punto"){?>
						<?php echo $_smarty_tpl->getVariable('item')->value['rango'];?>

					<?php }elseif($_smarty_tpl->getVariable('item')->value['tiporespuesta']=="opcional"){?>
						<?php echo $_smarty_tpl->getVariable('item')->value['opcional'];?>

					<?php }elseif($_smarty_tpl->getVariable('item')->value['tiporespuesta']=="abierta"){?>
						<?php echo $_smarty_tpl->getVariable('item')->value['numCaracter'];?>

					<?php }?>
			
			</td>
			<td><div align="center">

				
				<a href="javascript:void(0)" class="btn btn-xs yellow"  onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['preguntaId'];?>
)" title="Editar">
					<i class="fa fa-pencil-square-o" ></i> 
				</a>
				
				 <a class="btn btn-xs red" href="javascript:void(0)" onClick="DeleteQuestion(<?php echo $_smarty_tpl->getVariable('item')->value['preguntaId'];?>
)" title="Eliminar">
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
<!--
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
-->