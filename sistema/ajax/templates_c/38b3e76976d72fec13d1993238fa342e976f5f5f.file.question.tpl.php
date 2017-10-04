<?php /* Smarty version Smarty3-b7, created on 2017-10-03 22:07:40
         compiled from "C:/wamp/www/siv/sistema/templates/boxes/question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850859d4507c5fffc0-39675843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38b3e76976d72fec13d1993238fa342e976f5f5f' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/boxes/question.tpl',
      1 => 1507082180,
    ),
  ),
  'nocache_hash' => '1850859d4507c5fffc0-39675843',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <a href="javascript:;" class="close" data-dismiss="modal" aria-hidden="true"></a>
            <h4 class="modal-title">Agregar Encuesta</h4>
        </div>
        <div class="modal-body">
            <!-- START FORM -->
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/question.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

            <!-- END FORM -->
        </div>
        <div class="modal-footer">
            <span class="reqIcon">*</span> Campos requeridos
            
            <div align="center" id="loader"></div>
            <div align="center" id="txtErrMsg" class="alert alert-danger" style="display:none"></div>
            <button class="btn dark-btn-outline" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button class="btn green" onclick="SaveQuestions()"><?php if ($_smarty_tpl->getVariable('info')->value){?>Actualizar<?php }else{ ?>Guardar<?php }?></button>
        </div>
    </div>
</div>