<?php /* Smarty version Smarty3-b7, created on 2017-09-30 11:20:12
         compiled from "C:/wamp/www/siv/sistema/templates/forms/add-catalogo-electronico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1438059cfc43c945495-51317265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '053dbd5c774cdb63846f71e02e6a127fa5b39d9d' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/add-catalogo-electronico.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '1438059cfc43c945495-51317265',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="portlet-title">
	<div class="caption">
		<i class="icon-settings font-green"></i>
		Subir o actualizar catalogo electronico
	</div>
</div>
<div class="portlet-body form">
	<form  enctype="multipart/form-data" id="frmImg" action="#" method="post" class="form-horizontal form-bordered form-label-stripped">
	 	<?php if ($_smarty_tpl->getVariable('infox')->value){?>
		<input type="hidden" name="type" value="update" />
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['imagenId'];?>
" />
		<?php }else{ ?> 
		<input type="hidden" name="type" value="saveCatalogo" />
		<?php }?>

		<div class="form-body">
		    <div class="row">
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"> * </span>Nombre catalogo</label>
                        <div class="col-md-9">
                           <input class="form-control" name="nameCat" id="nameCat">
                        </div>
                    </div>
                 </div> -->
                 <div class="col-md-6">
                 	 <div class="form-group">
					 <font color="red">Se recomiendan archivos en PDF</font>
                 	 	<label class="control-label col-md-3"><span class="reqIcon"> * </span>Archivo en PDF</label>
                        <div class="col-md-9">
						 	<input type="file" id="doc_file" name="doc_file">
							<p class="help-block">Subir archivos</p>
						</div>
					</div>
                </div>
            </div>
           
		</div>
		<div class="form-actions">
            <div class="row">
                 <span class="reqIcon">*</span> Campos requeridos
                 <div align="center" id="loader"></div>
                 <div align="center" id="txtErrMsg" class="alert alert-danger" style="display:none"></div>
                <div class="col-md-offset-4 col-md-9">
                    <button type="button" class="btn green"  onclick="SaveReg()">Guardar</button>
                </div>
            </div>
        </div>
	</form>
</div>