<?php /* Smarty version Smarty3-b7, created on 2017-10-04 01:40:26
         compiled from "C:/wamp/www/siv/sistema/templates/forms/sucursal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21359d4825abbe1c7-17052872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd57b5d5f64c21a43e809a61692b131b86f4e6dec' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/sucursal.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '21359d4825abbe1c7-17052872',
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
			<?php if ($_smarty_tpl->getVariable('info')->value){?>
			<input type="hidden" name="type" value="update" />
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['sucursalid'];?>
" />
            <?php }else{ ?>
			<input type="hidden" name="type" value="save" />
			<?php }?>
		  <div class="form-body">
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Nombre</label>
					<div class="col-md-9">
						<?php if (!$_smarty_tpl->getVariable('info')->value){?>
							<input type="text" class="form-control" name="nombre" value=""  />
						<?php }else{ ?>
							<input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>
"  />
						<?php }?>
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Descripcion</label>
					<div class="col-md-9">
						<?php if (!$_smarty_tpl->getVariable('info')->value){?>
							<textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
						<?php }else{ ?>
							<textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"><?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>
</textarea>
						<?php }?>
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Encargado</label>
					<div class="col-md-9">
						<?php if (!$_smarty_tpl->getVariable('info')->value){?>
							<input type="text" class="form-control" name="encargado" value=""  />
						<?php }else{ ?>
							<input type="text" class="form-control" name="encargado" value="<?php echo $_smarty_tpl->getVariable('info')->value['encargado'];?>
"  />
						<?php }?>
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Direccion</label>
					<div class="col-md-9">
						<?php if (!$_smarty_tpl->getVariable('info')->value){?>
							<textarea name="direccion" id="direccion" cols="30" rows="10" class="form-control"></textarea>
						<?php }else{ ?>
							<textarea name="direccion" id="direccion" cols="30" rows="10" class="form-control"><?php echo $_smarty_tpl->getVariable('info')->value['direccion'];?>
</textarea>
						<?php }?>
					</div>
							
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-5"><span class="reqIcon"></span>Cordenada X</label>
							<div class="col-md-7">
								<?php if (!$_smarty_tpl->getVariable('info')->value){?>
									<input type="text" class="form-control input-small" name="cordenadax" value=""  />
								<?php }else{ ?>
									<input type="text" class="form-control" name="cordenadax" value="<?php echo $_smarty_tpl->getVariable('info')->value['coordenadaX'];?>
"  />
								<?php }?>
							</div>
									
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-5" align="left"><span class="reqIcon"></span>Cordenada Y</label>
							<div class="col-md-7">
								<?php if (!$_smarty_tpl->getVariable('info')->value){?>
									<input type="text" class="form-control input-small" name="cordenaday" value=""  />
								<?php }else{ ?>
									<input type="text" class="form-control" name="cordenaday" value="<?php echo $_smarty_tpl->getVariable('info')->value['coordenadaY'];?>
"  />
								<?php }?>
							</div>
									
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"></span>Horario</label>
					<div class="col-md-9">
						<?php if (!$_smarty_tpl->getVariable('info')->value){?>
							<input type="text" class="form-control input-small" name="horario" value=""  />
						<?php }else{ ?>
							<input type="text" class="form-control input-small" name="horario" value="<?php echo $_smarty_tpl->getVariable('info')->value['horario'];?>
"  />
						<?php }?>
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"></span>Municipio</label>
					<div class="col-md-9">
						<select name="municipio" id="municipio" class="form-control">
							<option></option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lstM')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								
								<option value="<?php echo $_smarty_tpl->getVariable('item')->value['municipioId'];?>
" <?php if ($_smarty_tpl->getVariable('info')->value['municipioId']==$_smarty_tpl->getVariable('item')->value['municipioId']){?> selected <?php }?>><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
							<?php }} ?>
						</select>
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"></span>Fachada</label>
					<div class="col-md-9">

							<input type="file" class="form-control input-small" name="img" id="img"  />
							<?php if ($_smarty_tpl->getVariable('info')->value['rutaFoto']==null){?>
							<progress id="progress" value="0"></progress>
							<?php }else{ ?>
							<progress id="progress" value="100"></progress>
							<?php }?>
							<div id="porcentaje"></div>
					</div>
							
				</div>
				
           </div>         
             </form>
                <!-- END FORM-->                  
            </div>
       </div>
    </div>
</div>