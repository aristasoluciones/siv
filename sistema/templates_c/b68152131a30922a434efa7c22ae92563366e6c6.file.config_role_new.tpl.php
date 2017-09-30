<?php /* Smarty version Smarty3-b7, created on 2017-09-30 11:15:50
         compiled from "C:/wamp/www/siv/sistema/templates/lists/config_role_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:632559cfc336d2c1c4-60433479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b68152131a30922a434efa7c22ae92563366e6c6' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/config_role_new.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '632559cfc336d2c1c4-60433479',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form name="frmConfigRole" id="frmConfigRole" action="#" class="form-horizontal ">
    <div class="form-body">
            <input type="hidden" name="type" value="saveConfig" />
            <input type="hidden" name="role_id" value="<?php echo $_smarty_tpl->getVariable('row')->value['ID'];?>
" />
            <table class="table table-hover">
             <thead>
               <th></th>
               <th>Modulo</th>
               <th>Asignar</th>
             </thead>
             <tbody>
             <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('listReq')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
              <tr>
               <td>
					<a href="javascript:void(0)" onClick="verNivel(<?php echo $_smarty_tpl->getVariable('item')->value['ID'];?>
)">
					[+]
					</a>
				</td>
               <td><?php echo $_smarty_tpl->getVariable('item')->value['Title'];?>
</td>
               <td>
              <input class="make-switch" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('item')->value['ID'];?>
" <?php if ($_smarty_tpl->getVariable('item')->value['check']){?>checked<?php }?> name="permisos_assign[]" data-off-color="warning" data-on-color="success">
               </td>
              </tr>
			  <tr style="display:none" id="td_<?php echo $_smarty_tpl->getVariable('item')->value['ID'];?>
">
				<td colspan="3">
					<table>
						<tr>
							<td></td>
							<td>SECCIONES</td>
							<td></td>
						</tr>
						 <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item')->value['secciones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
						 <tr>
							<td>
								<a href="javascript:void(0)" onClick="verNivel(<?php echo $_smarty_tpl->getVariable('item2')->value['ID'];?>
)">
								[+]
								</a>
							</td>
							<td><?php echo $_smarty_tpl->getVariable('item2')->value['Title'];?>
</td>
							<td>
							<input class="make-switch" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('item2')->value['ID'];?>
" <?php if ($_smarty_tpl->getVariable('item2')->value['check']){?>checked<?php }?> name="permisos_assign[]" data-off-color="warning" data-on-color="success">
							</td>
						 </tr>
						 <tr id="td_<?php echo $_smarty_tpl->getVariable('item2')->value['ID'];?>
" style="display:none">
							<td colspan="3" >
								<table>
									<tr>
										<td></td>
										<td>ACCIONES</td>
										<td></td>
									</tr>
									<?php  $_smarty_tpl->tpl_vars['item3'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('item2')->value['acciones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item3']->key => $_smarty_tpl->tpl_vars['item3']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item3']->key;
?>
									<tr>
										<td>
											
										</td>
										<td><?php echo $_smarty_tpl->getVariable('item3')->value['Title'];?>
</td>
										<td></td>
									</tr>
									<?php }} ?>
								</table>
							</td>
						 </tr>
						 <?php }} ?>
					</table>
				</td>
			  </tr>
             <?php }} ?>
             </tbody>
            </table>
    </div>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <div align="center" id="loader"></div>
                    <a href="javascript:;" onClick="SaveConfig()" type="button" class="btn blue">
                        <i class="fa fa-check"></i>Guardar Cambios</a>
                    <a type="button" class="btn default" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/rol">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</form>