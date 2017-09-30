<?php /* Smarty version Smarty3-b7, created on 2017-09-30 11:15:45
         compiled from "C:/wamp/www/siv/sistema/templates/lists/rol.tpl" */ ?>
<?php /*%%SmartyHeaderCode:606459cfc331f0ca69-89519597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cacaa869c27a45e67d73b121ee48179bbec8e22c' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/rol.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '606459cfc331f0ca69-89519597',
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
            <th>Tipo</th>
            <th>Descripcion</th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['Title'];?>
</td>
             <td><?php echo $_smarty_tpl->getVariable('item')->value['Description'];?>
</td>     
            <td><div align="center">
				<a href="javascript:void(0)" onClick="EditReg(<?php echo $_smarty_tpl->getVariable('item')->value['ID'];?>
)" title="Editar tramite">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/png-icon/big/glyphicons_150_edit.png" border="0">
				</a>
				<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/config_role/id/<?php echo $_smarty_tpl->getVariable('item')->value['ID'];?>
" title="Configurar rol" data-toggle="modal" class="btn">
					<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/png-icon/big/glyphicons_136_cogwheel.png">
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
<!-- <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/pages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('pages',$_smarty_tpl->getVariable('registros')->value['pages']);$_template->assign('info',$_smarty_tpl->getVariable('registros')->value['info']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
 -->