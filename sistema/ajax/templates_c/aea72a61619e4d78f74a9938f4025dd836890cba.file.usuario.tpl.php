<?php /* Smarty version Smarty3-b7, created on 2017-09-30 11:20:02
         compiled from "C:/wamp/www/siv/sistema/templates/forms/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2111859cfc432cf9936-74107762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aea72a61619e4d78f74a9938f4025dd836890cba' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/usuario.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '2111859cfc432cf9936-74107762',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row-fluid">																		
    <div class="tab-pane active" id="tab_0">
        <div class="portlet"  style="margin:-11px">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form id="frmGral" action="#" class="form-horizontal form-bordered form-label-stripped">        
                 
                <?php if ($_smarty_tpl->getVariable('info')->value){?>
                    <input type="hidden" name="type" value="update" />
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('info')->value['usuarioId'];?>
" />
                    <input type="hidden" name="rol_actual" value="<?php echo $_smarty_tpl->getVariable('info')->value['role_id'];?>
" />
                <?php }else{ ?> 
                   <input type="hidden" name="type" value="save" />
                <?php }?>
                <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
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
                             </div>
                             <div class="col-md-6">
            					 <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Apellido Paterno</label>
                                    <div class="col-md-9">
                                    	<?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                        <input type="text" class="form-control" name="apaterno" />
                                        <?php }else{ ?>
                                        	 <input type="text" class="form-control" name="apaterno" value="<?php echo $_smarty_tpl->getVariable('info')->value['apaterno'];?>
" />
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Apellido Materno</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                        <input type="text" class="form-control" name="amaterno" />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="amaterno" value="<?php echo $_smarty_tpl->getVariable('info')->value['amaterno'];?>
" />
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Fecha Nacimiento</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                            <input type="text" class="form-control" name="fechanacimiento" />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="fechanacimiento" value="<?php echo $_smarty_tpl->getVariable('info')->value['fechanacimiento'];?>
" />
                                        <?php }?>
                                    </div>
                                </div> 
                            </div>
                        </div>
					   <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Tel&eacute;fono</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                        <input type="text" class="form-control" name="telefono" />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="telefono" value="<?php echo $_smarty_tpl->getVariable('info')->value['telefono'];?>
" />
                                        <?php }?>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Email</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                        <input type="text" class="form-control" name="email" />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->getVariable('info')->value['email'];?>
" />
                                        <?php }?>
                                    </div>
                                </div> 
                            </div>               
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Usuario</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                        <input type="text" class="form-control" name="usuario" maxlength="13"  />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="usuario" value="<?php echo $_smarty_tpl->getVariable('info')->value['usuario'];?>
" maxlength="13" />
                                        <?php }?>
                                    </div>
                                </div>  
                           </div>
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Contrase&ntilde;a</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                            <input type="password" class="form-control" name="passwd" maxlength="13"  />
                                        <?php }else{ ?>
                                             <input type="password" class="form-control" name="passwd" value="<?php echo $_smarty_tpl->getVariable('info')->value['passwd'];?>
" maxlength="13" />
                                        <?php }?>
                                    </div>
                                </div>  
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Calle</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                            <input type="text" class="form-control" name="calle" maxlength="13"  />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="calle" value="<?php echo $_smarty_tpl->getVariable('info')->value['calle'];?>
"/>
                                        <?php }?>
                                    </div>
                                </div> 
                           </div>
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> No Exterior</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                            <input type="text" class="form-control" name="nexterior" />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="nexterior" value="<?php echo $_smarty_tpl->getVariable('info')->value['noExterior'];?>
"/>
                                        <?php }?>
                                    </div>
                                </div>  
                           </div>
                       </div>
                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Colonia</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                            <input type="text" class="form-control" name="colonia" />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="colonia" value="<?php echo $_smarty_tpl->getVariable('info')->value['colonia'];?>
"/>
                                        <?php }?>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Ciudad</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                            <input type="text" class="form-control" name="ciudad" />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="ciudad" value="<?php echo $_smarty_tpl->getVariable('info')->value['ciudad'];?>
"/>
                                        <?php }?>
                                    </div>
                                </div> 
                            </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Estado</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                            <input type="text" class="form-control" name="estado" />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="estado" value="<?php echo $_smarty_tpl->getVariable('info')->value['estado'];?>
"/>
                                        <?php }?>
                                    </div>
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <label class="control-label col-md-3"><span class="reqIcon">*</span> Pais</label>
                                    <div class="col-md-9">
                                        <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                            <input type="text" class="form-control" name="pais" />
                                        <?php }else{ ?>
                                             <input type="text" class="form-control" name="pais" value="<?php echo $_smarty_tpl->getVariable('info')->value['pais'];?>
"/>
                                        <?php }?>
                                    </div>
                                </div>
                           </div>
                       </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label col-md-3"><span class="reqIcon">*</span> Tipo / Rol</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="tipo" id="tipo">
                                    <option value=""></option>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('registros_roles')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                       <option value="<?php echo $_smarty_tpl->getVariable('item')->value['ID'];?>
" <?php if ($_smarty_tpl->getVariable('info')->value['role_id']==$_smarty_tpl->getVariable('item')->value['ID']){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('item')->value['Description'];?>
</option>}
                                    <?php }} ?>  
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <label class="control-label col-md-3"><span class="reqIcon">*</span> Estatus</label>
                                <div class="col-md-9">
                                   <?php if (!$_smarty_tpl->getVariable('info')->value){?>
                                    <input type="checkbox" name="activo" />
                                     <?php }else{ ?>
                                       <input type="checkbox" name="activo" <?php if ($_smarty_tpl->getVariable('info')->value['activo']==1){?>checked<?php }?> />
                                    <?php }?>
                                </div>  
                            </div>
                        </div>
						<br>
						<br>
						Sucursal:
						<select name="sucursalId" class="form-control">
							<option></option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lsts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							   <option value="<?php echo $_smarty_tpl->getVariable('item')->value['sucursalid'];?>
" <?php if ($_smarty_tpl->getVariable('info')->value['sucursalId']==$_smarty_tpl->getVariable('item')->value['sucursalid']){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
							<?php }} ?>  
                          </select>

                        		
				    </div><!-- END FORM-BODY -->					
                </form><!-- END FORM-->                  
            </div>
        </div>
    </div>     
</div>