<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:25:00
         compiled from "C:/wamp/www/siv/sistema/templates/forms/filtro-pedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119559d55fbc1b4b37-75321601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a56464c112c06534b5d5535bf8c9a599669ab5' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/filtro-pedido.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '119559d55fbc1b4b37-75321601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="portlet-title">
    <div class="caption">
        <i class="icon-settings font-green"></i>
         Filtro de busqueda
    </div>
</div>
<div class="portlet-body form">
    <form  enctype="multipart/form-data" id="frmFiltroPedido" action="#" method="post" class="form-horizontal form-bordered form-label-stripped">
        <input type="hidden" name="type" value="buscarPedido">
         <div class="form-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"></span>Folio</label>
                        <div class="col-md-9">
                           <input class="form-control" name="folio" id="folio">
                        </div>
                    </div>
                 </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3"><span class="reqIcon"></span>Sucursal</label>
                        <div class="col-md-9">
                          <?php if ($_smarty_tpl->getVariable('all_sucursales')->value){?>
                           <select name="sucursalId" id="sucursalId" class="form-control">
                               <option value="">Seleccionar sucursal</option>
                               <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sucursales')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                <option value="<?php echo $_smarty_tpl->getVariable('item')->value['sucursalId'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['nombre'];?>
</option>
                               <?php }} ?>
                           </select>
                          <?php }else{ ?>
                              <input type="text" name="namesucursal" class="form-control" value="<?php echo $_smarty_tpl->getVariable('suc')->value['nombre'];?>
" readonly>
                              <input type="hidden" name="sucursalId" id="sucursalId" value="<?php echo $_smarty_tpl->getVariable('suc')->value['sucursalId'];?>
">
                          <?php }?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-4 col-md-9">
                    <button type="button" class="btn green"  onclick="buscarPedidos()">Buscar</button>
                </div>
            </div>
        </div>
    </form>
</div>