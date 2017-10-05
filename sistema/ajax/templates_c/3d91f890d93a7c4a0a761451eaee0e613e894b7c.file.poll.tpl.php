<?php /* Smarty version Smarty3-b7, created on 2017-10-04 18:11:32
         compiled from "C:/wamp/www/siv/sistema/templates/forms/poll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1633759d56aa4f108e1-04920802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d91f890d93a7c4a0a761451eaee0e613e894b7c' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/poll.tpl',
      1 => 1507158654,
    ),
  ),
  'nocache_hash' => '1633759d56aa4f108e1-04920802',
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
			<input type="hidden" name="encuestaId" value="<?php echo $_smarty_tpl->getVariable('info')->value['encuestaId'];?>
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
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Inicio</label>
					<div class="col-md-9">
							<input type="text" class="form-control" name="inicio"  id="fecha_1" value="<?php echo $_smarty_tpl->getVariable('info')->value['inicio'];?>
"  onClick='cargaDate(1)' />
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Fin</label>
					<div class="col-md-9">
							<input type="text" class="form-control" name="fin" id="fecha_2" value="<?php echo $_smarty_tpl->getVariable('info')->value['fin'];?>
"  onClick='cargaDate(2)' />
					</div>
							
				</div>

			</div>     
             </form>
                <!-- END FORM-->                  
            </div>
       </div>
    </div>
</div>