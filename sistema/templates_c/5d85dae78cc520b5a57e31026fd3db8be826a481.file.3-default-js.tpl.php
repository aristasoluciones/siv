<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:18:33
         compiled from "C:/wamp/www/siv/sistema/templates/3-default-js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:419959d55e39eda246-93074208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d85dae78cc520b5a57e31026fd3db8be826a481' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/3-default-js.tpl',
      1 => 1506787351,
    ),
  ),
  'nocache_hash' => '419959d55e39eda246-93074208',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
 <script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
//assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
//assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>

<?php if ($_smarty_tpl->getVariable('datatable_flag')->value){?>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<?php }?>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php if ($_smarty_tpl->getVariable('page')->value=="doc_crear"){?>
 <script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
<?php }?>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/js/functions.js?<?php echo $_smarty_tpl->getVariable('time')->value;?>
" type="text/javascript"></script> 
<!-- <?php if ($_smarty_tpl->getVariable('page')->value=="login"){?>
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/pages/scripts/login.min.js" type="text/javascript"></script>   
<?php }?> -->
<script src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/js/<?php echo $_smarty_tpl->getVariable('page')->value;?>
.js?<?php echo $_smarty_tpl->getVariable('time')->value;?>
" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
