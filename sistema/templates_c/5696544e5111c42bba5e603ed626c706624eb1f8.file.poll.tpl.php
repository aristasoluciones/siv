<?php /* Smarty version Smarty3-b7, created on 2017-10-04 19:29:25
         compiled from "C:/wamp/www/siv/sistema/templates/poll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2831559d57ce5f32c24-03173828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5696544e5111c42bba5e603ed626c706624eb1f8' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/poll.tpl',
      1 => 1507158479,
    ),
  ),
  'nocache_hash' => '2831559d57ce5f32c24-03173828',
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
				<a href="#">SmartTest</a>
				<i class="fa fa-circle"></i>
			</li>
			
		</ul>
		</div>
	</div>
	 <!-- BEGIN PAGE TITLE-->
		<h1 class="page-title">SmartTest
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
				   <span class="caption-subject font-green sbold">SmartTest</span>
				 </div>  
				<div class="actions">
				    <div class="btn-group btn-group-devided" data-toggle="buttons"> 
					<a href="javascript:;" class="btn btn-circle sbold green" onClick="AddReg()">
						Agregar <i class="fa fa-plus"></i>
					</a>
					</div>
					<div class="btn-group" >
					 <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                       <i class="fa fa-share"></i>
                       <span class="hidden-xs">Acciones</span>
                       <i class="fa fa-angle-down"></i>
                     </a>
					 <ul class="dropdown-menu pull-right" id="sample_3_tools" >
						<li>
							<a href="javascript:;" data-action="0" class="tool-action">
							<i class="icon-printer"></i> Imprimir</a>
                        </li>
						<li>
							<a href="javascript:;" data-action="1" class="tool-action">
								<i class="icon-check"></i> Copiar</a>
						</li>
						<li>
							<a href="javascript:;" data-action="2" class="tool-action">
								<i class="icon-doc"></i> Exportar PDF</a>
						</li>
						<li>
							<a href="javascript:;" data-action="3" class="tool-action">
								<i class="icon-paper-clip"></i> Exportar Excel</a>
						</li>
						<li>
							<a href="javascript:;" data-action="4" class="tool-action">
								<i class="icon-cloud-upload"></i> Exportar CSV</a>
						</li>
					 </ul>
					</div>	
				</div>
			</div>
			<div class="portlet-body" id="tblContent">
			 <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/poll.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT-->	