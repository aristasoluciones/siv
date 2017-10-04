<?php /* Smarty version Smarty3-b7, created on 2017-10-04 02:56:45
         compiled from "C:/wamp/www/siv/sistema/templates/nota.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3034459d4943ddbf773-13901694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afa0883be9b934d7419f651b842c6b7d76d81d31' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/nota.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '3034459d4943ddbf773-13901694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		<div class="span12">           
			<h3 class="page-title">
				<!--Dependencia-->
			</h3>
		 <ul class="page-breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Inicio</a> 
				<i class="fa fa-circle"></i>
			</li>
			<li>
				<a href="#">Configuracion</a>
				<i class="fa fa-circle"></i>
			</li>
			<li><a href="#">Notal del mes</a></li>
		</ul>
		</div>
	</div>
	 <!-- BEGIN PAGE TITLE-->
		<h1 class="page-title">Nota del mes
			<small></small>
		</h1>
	 <!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
	<div class="row">
		<div class="portlet light portlet-fit portlet-datatable bordered">			
			 <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/add-nota-mes.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	
		</div>		  
	</div>
	<div class="clearfix"></div>
	<div class="portlet light portlet-fit portlet-datatable bordered">
	 <div class="portlet-title">
		<div class="caption">
			<h2><b>Nota actual</b><h2>
		</div>
	 </div>
	 <div class="blog-page blog-content-2">
		 <div class="row">
		 	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/forms/nota-actual.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	
		 </div>
	 </div>
	 </div>
	<!-- END PAGE CONTENT-->	