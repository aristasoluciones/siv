<?php /* Smarty version Smarty3-b7, created on 2017-09-30 12:43:16
         compiled from "C:/wamp/www/siv/sistema/templates/birthday.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2640959cfd7b4ae7836-73325793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e574a5a03057fd10ca7ae443cd601896736ce04a' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/birthday.tpl',
      1 => 1506793393,
    ),
  ),
  'nocache_hash' => '2640959cfd7b4ae7836-73325793',
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
				<a href="#">SIV</a>
				<i class="fa fa-circle"></i>
			</li>
			<li><a href="#">Cumpleaños</a></li>
		</ul>
		</div>
	</div>
	 <!-- BEGIN PAGE TITLE-->
		<h1 class="page-title">Cumpleaños
			<small></small>
		</h1>
	 <!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
	<div class="row">
		<div class="portlet light portlet-fit portlet-datatable bordered">
			<div class="portlet-title">
				<div class="caption">
				   <i class="icon-settings font-green"></i>
				   <span class="caption-subject font-green sbold"></span>
				 </div>  

			</div>
			<div class="portlet-body" id="tblContent">
			 <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT-->	