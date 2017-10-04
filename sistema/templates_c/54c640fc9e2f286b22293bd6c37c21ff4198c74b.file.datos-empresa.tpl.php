<?php /* Smarty version Smarty3-b7, created on 2017-10-03 19:44:48
         compiled from "C:/wamp/www/siv/sistema/templates/forms/datos-empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2352459d42f009cf107-82417457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54c640fc9e2f286b22293bd6c37c21ff4198c74b' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/datos-empresa.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '2352459d42f009cf107-82417457',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="portlet-title">
	<div class="caption">
		<i class="icon-settings font-green"></i>
		Agregar o actualizar datos de la empresa
	</div>
</div>
<div class="portlet-body form">
	<form  enctype="multipart/form-data" id="frmDatos" onsubmit="return false;" action="#" method="post" class="form-horizontal form-bordered form-label-stripped">
	 	<?php if ($_smarty_tpl->getVariable('datosempresa')->value){?>
		<input type="hidden" name="type" value="updateDatosEmpresa" />
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['datoEmpresaId'];?>
" />
		<?php }else{ ?> 
		<input type="hidden" name="type" value="saveDatosEmpresa" />
		<?php }?>

		<div class="form-body">
		    <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"> * </span>Nombre / Razon social</label>
                        <div class="col-md-9">
                            <?php if (!$_smarty_tpl->getVariable('datosempresa')->value){?>
                                <input class="form-control" name="nombre" id="nombre">
                            <?php }else{ ?>
                                <input class="form-control" name="nombre" id="nombre" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['nombre'];?>
">
                            <?php }?>

                        </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"></span>RFC</label>
                        <div class="col-md-9">
                            <?php if (!$_smarty_tpl->getVariable('datosempresa')->value){?>
                                <input class="form-control" name="rfc" id="rfc">
                            <?php }else{ ?>
                                <input class="form-control" name="rfc" id="rfc" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['rfc'];?>
">
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"> </span>Direccion</label>
                        <div class="col-md-9">
                           <?php if (!$_smarty_tpl->getVariable('datosempresa')->value){?>
                                <input class="form-control" name="direccion" id="direccion">
                            <?php }else{ ?>
                                <input class="form-control" name="direccion" id="direccion" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['direccion'];?>
">
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"> </span>Codigo postal</label>
                        <div class="col-md-9">
                           <?php if (!$_smarty_tpl->getVariable('datosempresa')->value){?>
                                <input class="form-control" name="cp" id="cp">
                            <?php }else{ ?>
                                <input class="form-control" name="cp" id="cp" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['cp'];?>
">
                            <?php }?>
                        </div>
                    </div>
                </div>
                
            </div>
           
           <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"> </span>Ciudad</label>
                        <div class="col-md-9">
                           <?php if (!$_smarty_tpl->getVariable('datosempresa')->value){?>
                                <input class="form-control" name="ciudad" id="ciudad">
                            <?php }else{ ?>
                                <input class="form-control" name="ciudad" id="ciudad" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['ciudad'];?>
">
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"></span>Estado</label>
                        <div class="col-md-9">
                            <?php if (!$_smarty_tpl->getVariable('datosempresa')->value){?>
                                <input class="form-control" name="estado" id="estado">
                            <?php }else{ ?>
                                <input class="form-control" name="estado" id="estado" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['estado'];?>
">
                            <?php }?>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"></span>Pais</label>
                        <div class="col-md-9">
                            <?php if (!$_smarty_tpl->getVariable('datosempresa')->value){?>
                                <input class="form-control" name="pais" id="pais">
                            <?php }else{ ?>
                                <input class="form-control" name="pais" id="pais" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['pais'];?>
">
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"> </span>Email</label>
                        <div class="col-md-9">
                           <?php if (!$_smarty_tpl->getVariable('datosempresa')->value){?>
                                <input class="form-control" name="email" id="email">
                            <?php }else{ ?>
                                <input class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['email'];?>
">
                            <?php }?>
                        </div>
                    </div>
                </div>
               
            </div>
           
           <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"></span>Telefonos</label>
                        <div class="col-md-9">
                            <?php if (!$_smarty_tpl->getVariable('datosempresa')->value){?>
                                <input class="form-control" name="telefono" id="telefono">
                            <?php }else{ ?>
                                <input class="form-control" name="telefono" id="telefono" value="<?php echo $_smarty_tpl->getVariable('datosempresa')->value['telefono'];?>
">
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    
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