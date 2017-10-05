<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:24:59
         compiled from "C:/wamp/www/siv/sistema/templates/pedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3045859d55fbbf3d852-44453488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24771dbf084854224b33231d05df94d70c1d9b8f' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/pedido.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '3045859d55fbbf3d852-44453488',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		 <ul class="page-breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Inicio</a> 
				<i class="fa fa-circle"></i>
			</li>
			<li>
				<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/pedido">Pedidos</a>
				<i class="fa fa-circle"></i>
			</li>
			<li><a href="#"></a></li>
		</ul>
		<div class="page-toolbar">
		</div>
	</div>
	 <!-- BEGIN PAGE TITLE-->
		<h1 class="page-title"> Pedidos realizados
			<small></small>
		</h1>
	 <!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
	<div class="row">
		<div class="col-md-8  col-md-offset-2">
            <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/filtro-pedido.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

		</div>
		<div class="col-md-12" id="tbl-content-pedido">
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
					   <i class="icon-settings font-green"></i>Lista de pedidos
					 </div>  
				</div>
				<div class="portlet-body">
				 <div class="table-responsive" id="tblContent">
				 	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

				 </div>
				 
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT-->	