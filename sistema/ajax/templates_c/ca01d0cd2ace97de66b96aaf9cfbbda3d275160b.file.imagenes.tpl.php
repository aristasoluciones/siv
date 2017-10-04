<?php /* Smarty version Smarty3-b7, created on 2017-10-03 20:03:35
         compiled from "C:/wamp/www/siv/sistema/templates/forms/imagenes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:635959d433679f3c65-01326537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca01d0cd2ace97de66b96aaf9cfbbda3d275160b' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/imagenes.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '635959d433679f3c65-01326537',
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
		<form id="frmGral" action="#" class="form-horizontal form-bordered form-label-stripped">

			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['imagenId'];?>
" />
			<input type="hidden" name="type" value="save" />

		  <div class="form-body">
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Nombre</label>
					<div class="col-md-9">
							<input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>
"  />
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Descripcion</label>
					<div class="col-md-9">
							<textarea name="descripcion" class="form-control"><?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>
</textarea>
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Activo</label>
					<div class="col-md-9">
						<select name="activo" id="activo" class="form-control" >
							<option <?php if ($_smarty_tpl->getVariable('info')->value['activo']=="no"){?> selected <?php }?>>no</option>
							<option <?php if ($_smarty_tpl->getVariable('info')->value['activo']=="si"){?> selected <?php }?>>si</option>
						</select>
					</div>	
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Archivo</label>
					<div class="col-md-9">
						<font color="red">Importante: Solo imagenenes de tamaño 1400px x 420px</font>
						<input type="file" name="img" id="img">
					</div>	
				</div>
				
				
           </div>         
             </form>
                <!-- END FORM-->                  
            </div>
       </div>
    </div>
</div>