<?php /* Smarty version Smarty3-b7, created on 2017-10-04 01:40:05
         compiled from "C:/wamp/www/siv/sistema/templates/forms/producto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2582259d48245f25c26-12283382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '859af89ea1d948ba7a4cce4ca614e203fb52fd95' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/producto.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '2582259d48245f25c26-12283382',
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
		<form id="frmGral" action="#" class="form-horizontal form-bordered form-label-stripped" >
			<?php if ($_smarty_tpl->getVariable('info')->value){?>
			<input type="hidden" name="type" value="update" />
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['categoriaId'];?>
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
				 <label class="control-label col-md-3"><span class="reqIcon"> * </span> Descripcion</label>
					<div class="col-md-9">
					 <?php if (!$_smarty_tpl->getVariable('info')->value){?>
						<textarea  name="descripcion" class="form-control"></textarea>
					<?php }else{ ?>
						<textarea name="descripcion" class="form-control" ><?php echo $_smarty_tpl->getVariable('info')->value['descripcion'];?>
</textarea>
					<?php }?>
					</div>
				 </div>
				 <div class="form-group">
				 <label class="control-label col-md-3"><span class="reqIcon"> * </span> A quien va dirigido</label>
					<div class="col-md-9">
					 <?php if (!$_smarty_tpl->getVariable('info')->value){?>
						<textarea  name="aquien" class="form-control"></textarea>
					<?php }else{ ?>
						<textarea name="aquien" class="form-control" ><?php echo $_smarty_tpl->getVariable('info')->value['aquien'];?>
</textarea>
					<?php }?>
					</div>
				 </div>
				 <div class="form-group">
				 <label class="control-label col-md-3"><span class="reqIcon"> * </span> Ventajas </label>
					<div class="col-md-9">
					 <?php if (!$_smarty_tpl->getVariable('info')->value){?>
						<textarea  name="ventaja" class="form-control"></textarea>
					<?php }else{ ?>
						<textarea name="ventaja" class="form-control" ><?php echo $_smarty_tpl->getVariable('info')->value['ventajas'];?>
</textarea>
					<?php }?>
					</div>
				 </div>
				  <div class="form-group">
				  <font color="red">Se recomiendan imagenes de 256 x 256 Píxeles</font>
				  <label class="control-label col-md-3"><span class="reqIcon">  </span> Imagen de categoria </label>
					<div class="col-md-9">
					 <?php if (!$_smarty_tpl->getVariable('info')->value){?>
						<input type="file" class="form-control" name="imgCategoria" id="imgCategoria">
					<?php }else{ ?>

						<input type="file" class="form-control" name="imgCategoria" id="imgCategoria">
					<?php }?>
					</div>
				 </div>
				 
             </div>         
             </form>
                <!-- END FORM-->                  
            </div>
       </div>
    </div>
</div>