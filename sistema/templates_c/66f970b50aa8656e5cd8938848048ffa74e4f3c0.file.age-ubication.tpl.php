<?php /* Smarty version Smarty3-b7, created on 2017-10-04 19:58:38
         compiled from "C:/wamp/www/siv/sistema/templates/lists/age-ubication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256559d583be3e28c8-79231472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f970b50aa8656e5cd8938848048ffa74e4f3c0' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/age-ubication.tpl',
      1 => 1507095795,
    ),
  ),
  'nocache_hash' => '256559d583be3e28c8-79231472',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table-container">
<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/boxes/messages.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<table class="table table-striped table-bordered table-hover" >
    <thead>
        <tr>
            <th>#</th>
            <th>Colonia </th>
            <th>Fuera de Rango  </th>
            <th>18 - 24  </th>
            <th>25 - 59 </th>
            <th>60 - adelante </th>
            <th>Total Personas </th>
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
            <td><?php echo $_smarty_tpl->getVariable('item')->value['nombreColonia'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['fuera'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['rango1'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['rango2'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['rango3'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('item')->value['total'];?>
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