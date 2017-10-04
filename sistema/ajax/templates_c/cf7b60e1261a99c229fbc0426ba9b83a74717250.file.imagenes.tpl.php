<?php /* Smarty version Smarty3-b7, created on 2017-10-03 20:03:35
         compiled from "C:/wamp/www/siv/sistema/templates/boxes/imagenes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2056659d43367875fb2-01167514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf7b60e1261a99c229fbc0426ba9b83a74717250' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/boxes/imagenes.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '2056659d43367875fb2-01167514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<a href="javascript:;" class="close" data-dismiss="modal" aria-hidden="true"></a>
			<h4 class="modal-title">Imagenes</h4>
		</div>
		<div class="modal-body">
			<!-- START FORM -->
			<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/imagenes.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			<!-- END FORM -->
		</div>
		<div class="modal-footer">
			<span class="reqIcon">*</span> Campos requeridos
			
			<div align="center" id="loader"></div>
			<div align="center" id="txtErrMsg" class="alert alert-danger" style="display:none"></div>
			<button class="btn dark-btn-outline" data-dismiss="modal" aria-hidden="true">Cancelar</button>
			<button class="btn green" onclick="SaveReg()"><?php if ($_smarty_tpl->getVariable('info')->value){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
		</div>
	</div>
</div>