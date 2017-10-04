<?php /* Smarty version Smarty3-b7, created on 2017-10-03 20:03:18
         compiled from "C:/wamp/www/siv/sistema/templates/forms/poll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754059d433568a31f4-52490175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d91f890d93a7c4a0a761451eaee0e613e894b7c' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/poll.tpl',
      1 => 1507078994,
    ),
  ),
  'nocache_hash' => '1754059d433568a31f4-52490175',
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
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['clienteId'];?>
" />
            <?php }else{ ?>
			<input type="hidden" name="type" value="save" />
			<?php }?>
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
							<input type="text" class="form-control" name="inicio" value="<?php echo $_smarty_tpl->getVariable('info')->value['inicio'];?>
"  />
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Fin</label>
					<div class="col-md-9">
							<input type="text" class="form-control" name="fin" value="<?php echo $_smarty_tpl->getVariable('info')->value['fin'];?>
"  />
					</div>
							
				</div>

			</div>     
             </form>
                <!-- END FORM-->                  
            </div>
       </div>
    </div>
</div>