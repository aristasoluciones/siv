<?php /* Smarty version Smarty3-b7, created on 2017-09-30 11:15:50
         compiled from "C:/wamp/www/siv/sistema/templates/config_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:330859cfc336b824d4-96492663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce20e7f2f64efc68b84eea3ee2b5bf9655b1f8f' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/config_role.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '330859cfc336b824d4-96492663',
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
			<li><a href="#">Roles</a></li>
		</ul>
		</div>
	</div>
	 <!-- BEGIN PAGE TITLE-->
		<h1 class="page-title"> Configurar Rol
			<small></small>
		</h1>
	 <!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
	<div class="row ">
	 <div class="col-md-12">
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
				   <i class="icon-settings"></i>
				   Configurando <?php echo $_smarty_tpl->getVariable('row')->value['Description'];?>

				 </div>  
				<div class="tools">
				  <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>  		
			    </div>
			</div>
			<div class="portlet-body form">
			 <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/lists/{$_smarty_tpl->getVariable('page')->value}_new.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			</div>
		</div>
	  </div>
    </div>
	<!-- END PAGE CONTENT-->	