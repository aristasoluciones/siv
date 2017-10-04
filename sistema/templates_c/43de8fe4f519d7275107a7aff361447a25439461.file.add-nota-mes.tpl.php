<?php /* Smarty version Smarty3-b7, created on 2017-10-04 02:56:45
         compiled from "C:/wamp/www/siv/sistema/templates/forms/add-nota-mes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:617759d4943df2d5f2-78581342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43de8fe4f519d7275107a7aff361447a25439461' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/add-nota-mes.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '617759d4943df2d5f2-78581342',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="portlet-title">
	<div class="caption">
		<i class="icon-settings font-green"></i>
		Subir o actualizar nota del mes
	</div>
</div>
<div class="portlet-body form">
	<form  enctype="multipart/form-data" id="frmImg" action="#" method="post" class="form-horizontal form-bordered form-label-stripped">
	 	<?php if ($_smarty_tpl->getVariable('infox')->value){?>
		<input type="hidden" name="type" value="update" />
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['imagenId'];?>
" />
		<?php }else{ ?> 
		<input type="hidden" name="type" value="save" />
		<?php }?>

		<div class="form-body">
		    <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"> * </span>Titulo de la nota</label>
                        <div class="col-md-9">
                           <input class="form-control" name="tituloNota" id="tituloNota">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                 	 <div class="form-group">
					 <font color="red">Se recomiendan imagenes de 600 x 300 Píxeles</font>
                 	 	<label class="control-label col-md-3"><span class="reqIcon"> * </span>Archivo adjunto</label>
                        <div class="col-md-9">
						 	<input type="file" id="doc_file" name="doc_file">
							<p class="help-block">Subir archivos</p>
						</div>
					</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3" align="left"><span class="reqIcon"> * </span>Descripcion</label>
                        <div class="col-md-9">
                           <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
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
                    <button type="button" class="btn green"  onclick="SaveReg()">Guardar cambios</button>
                    <!-- <button type="button" class="btn default" onclick="hidenForm()">Cancel</button> -->
                </div>
            </div>
        </div>
	</form>
</div>