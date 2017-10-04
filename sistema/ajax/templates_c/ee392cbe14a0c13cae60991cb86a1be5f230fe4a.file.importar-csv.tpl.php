<?php /* Smarty version Smarty3-b7, created on 2017-10-04 15:19:09
         compiled from "C:/wamp/www/siv/sistema/templates/forms/importar-csv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280659d5423d5f7f85-13413791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee392cbe14a0c13cae60991cb86a1be5f230fe4a' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/importar-csv.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '280659d5423d5f7f85-13413791',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">
  <div class="tab-pane active" id="tab_0">
	<div style="margin:-11px" class="portlet" >
 <!-- <div class="portlet-title">
         <div class="caption"><i class="icon-reorder"></i><?php if (!$_smarty_tpl->getVariable('info')->value['view']){?>Ingrese los <?php }?>Datos</div>                
      </div>-->
      <div class="portlet-body form">
       <!-- BEGIN FORM-->
		<form id="frmImportarArchivo" action="#" class="form-horizontal form-bordered form-label-stripped">
		 <input type="hidden" name="type" value="importar-csv" >
		  <div class="form-body">
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Tipo de importacion</label>
					<div class="col-md-9">
						<select name="tipo" id="tipo" class="form-control">
							 <option value="">Seleccionar......</option>
							 <option value="producto">Productos</option>
							 <option value="categoria">Categorias</option>
						</select>
					</div>		
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Adjuntar archivo</label>
					<div class="col-md-9">
							<input type="file" class="form-control" name="fileCsv" id="fileCsv" />
					</div>	
				</div> 
             </div>         
             </form>
                <!-- END FORM-->                  
            </div>
       </div>
    </div>
</div>