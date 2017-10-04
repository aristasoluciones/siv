<?php /* Smarty version Smarty3-b7, created on 2017-10-03 22:33:39
         compiled from "C:/wamp/www/siv/sistema/templates/forms/question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21159d45693c424d3-28033910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43dd54cabdb7bc67b1be34de10376b27e17785f3' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/question.tpl',
      1 => 1507088015,
    ),
  ),
  'nocache_hash' => '21159d45693c424d3-28033910',
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

			<input type="hidden" name="encuestaId" id="encuestaId" value="<?php echo $_smarty_tpl->getVariable('encuestaId')->value;?>
" />
			<input type="hidden" name="type" value="SaveQuestions" />

		  <div class="form-body">
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Pregunta</label>
					<div class="col-md-9">
							<input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->getVariable('info')->value['nombre'];?>
"  />
					</div>
							
				</div>

				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Tipo</label>
					<div class="col-md-9">
							<select name="tipo" id="tipo" onChange="checaTipopregunta()"  class="form-control">
								<option value=""></option>
								<option value="punto">Puntos</option>
								<option value="opcional">Opcional</option>
								<option value="abierta">Abierta</option>
							</select>
					</div>	
				</div>
				
				<div class="form-group" id="div_rango"   <?php if ($_smarty_tpl->getVariable('info')->value['tiporespuesta']!="punto"){?> style="display:none" <?php }?>>
						<label class="control-label col-md-3"><span class="reqIcon">*</span> Rango:</label>
					<div class="col-md-9">
							DE:<input type="text" name="de" value="<?php echo $_smarty_tpl->getVariable('de')->value;?>
" style="width:50px"  class="form-control"> A:<input type="text" name="a" value="<?php echo $_smarty_tpl->getVariable('a')->value;?>
" style="width:50px"  class="form-control">
					</div>	
				</div>
				
				 
				<div class="form-group" id="div_par" <?php if ($_smarty_tpl->getVariable('info')->value['tiporespuesta']!="opcional"){?> style="display:none" <?php }?>>
				<label class="control-label col-md-3"><span class="reqIcon">*</span> Parametros Opcional:</label>
				<div class="col-md-9">
					Opcion 1.<input type="text" name="res_1" value="<?php echo $_smarty_tpl->getVariable('o1')->value;?>
"  class="form-control" >
					Opcion 2.<input type="text" name="res_2" value="<?php echo $_smarty_tpl->getVariable('o2')->value;?>
"  class="form-control" >
					Opcion 3.<input type="text" name="res_3" value="<?php echo $_smarty_tpl->getVariable('o3')->value;?>
"  class="form-control" >
					Opcion 4.<input type="text" name="res_4" value="<?php echo $_smarty_tpl->getVariable('o4')->value;?>
"  class="form-control" >
					Opcion 5.<input type="text" name="res_5" value="<?php echo $_smarty_tpl->getVariable('o5')->value;?>
"  class="form-control" >
				</div>
				</div>


				<div class="form-group" id="div_car" <?php if ($_smarty_tpl->getVariable('info')->value['tiporespuesta']!="abierta"){?> style="display:none" <?php }?>>
					<label class="control-label col-md-3"><span class="reqIcon">*</span>Num. Caracteres:</label>
					 <div class="col-md-9">
						<input type="text" name="caracter" class="form-control">
					</div>
				</div>

			</div>     
             </form>
                <!-- END FORM-->                  
            </div>
       </div>
    </div>
</div>