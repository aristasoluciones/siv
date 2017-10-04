<?php /* Smarty version Smarty3-b7, created on 2017-10-04 14:52:30
         compiled from "C:/wamp/www/siv/sistema/templates/forms/rol.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2671559d53bfe2c8d30-21840566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f70209ca27a0e1a044d65e2cc4bca93e4d0bfd1' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/rol.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '2671559d53bfe2c8d30-21840566',
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
		<form id="frmRole" action="#" class="form-horizontal form-bordered form-label-stripped">
			<?php if ($_smarty_tpl->getVariable('info')->value){?>
			<input type="hidden" name="type" value="update" />
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['ID'];?>
" />
            <?php }else{ ?>
			<input type="hidden" name="type" value="save" />
			<?php }?>
		  <div class="form-body">
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span> Descripcion</label>
					<div class="col-md-9">
						<?php if (!$_smarty_tpl->getVariable('info')->value){?>
							<input type="text" class="form-control" name="descripcion" value=""  />
						<?php }else{ ?>
							<input type="text" class="form-control" name="descripcion" value="<?php echo $_smarty_tpl->getVariable('info')->value['Description'];?>
"  />
						<?php }?>
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span> Nombre corto</label>
					<div class="col-md-9">
						<?php if (!$_smarty_tpl->getVariable('info')->value){?>
							<input type="text" class="form-control" name="nombre" value=""  />
						<?php }else{ ?>
							<input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->getVariable('info')->value['Title'];?>
"  />
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