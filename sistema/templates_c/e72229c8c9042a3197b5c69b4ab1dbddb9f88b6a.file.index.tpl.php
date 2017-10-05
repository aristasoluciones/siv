<?php /* Smarty version Smarty3-b7, created on 2017-10-04 19:29:00
         compiled from "C:/wamp/www/siv/sistema/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2889459d57ccc697c00-42642544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e72229c8c9042a3197b5c69b4ab1dbddb9f88b6a' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/index.tpl',
      1 => 1507047451,
    ),
  ),
  'nocache_hash' => '2889459d57ccc697c00-42642544',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/1-default-meta.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/2-default-css.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC85iwEXPOlJsw4CKpkGMxmnq4aLz48Eo4&sensor=true"></script>
</head>
<body  class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-boxed"> --> <!-- agregar container para page boxed-->
    <!-- BEGIN WRAPPER-->
	<div class="page-wrapper">
	<!-- BEGIN HEADER -->
	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<!-- END HEADER -->
	<!-- BEGIN HEADER & CONTENT DIVIDER -->
     <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
	
	<!-- <div class="container"> --> <!-- agregar container para page boxed-->
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<div class="page-sidebar-wrapper">
		  <!-- BEGIN SIDEBAR -->
			<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/menus/main.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

			
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
		 <div id="draggable" class="modal fade draggable-modal" tabindex="-1" role="dialog"  aria-hidden="true">
         </div>
         <div class="modal fade bs-modal-lg" id="large" tabindex="-1" role="dialog" aria-hidden="true">
         </div>

        
		  <!-- BEGIN CONTENT BODY -->
         <div class="page-content">
		  <?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/{$_smarty_tpl->getVariable('page')->value}.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

		  </div>
		  <!-- END CONTENT BODY-->
        </div>
	  </div>
	<!-- </div> -->
	<!-- END CONTAINER-->
    <!-- <div class="container"> -->
	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- </div> -->
	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/3-default-js.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    
	<script type="text/javascript">
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins		   
		});
	</script>
   
   </div> 
   <!-- END WRAPPER-->   
</body>
</html>