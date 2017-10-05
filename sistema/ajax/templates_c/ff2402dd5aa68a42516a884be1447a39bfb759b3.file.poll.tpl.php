<?php /* Smarty version Smarty3-b7, created on 2017-10-04 18:09:06
         compiled from "C:/wamp/www/siv/sistema/templates/boxes/poll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1202459d56a12a86ad2-61054705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2402dd5aa68a42516a884be1447a39bfb759b3' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/boxes/poll.tpl',
      1 => 1507158543,
    ),
  ),
  'nocache_hash' => '1202459d56a12a86ad2-61054705',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <a href="javascript:;" class="close" data-dismiss="modal" aria-hidden="true"></a>
            <h4 class="modal-title"><?php if ($_smarty_tpl->getVariable('info')->value){?> Editar <?php }else{ ?> Agregar <?php }?> Encuesta</h4>
        </div>
        <div class="modal-body">
            <!-- START FORM -->
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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