<?php /* Smarty version Smarty3-b7, created on 2017-10-03 16:36:51
         compiled from "C:/wamp/www/siv/sistema/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1904859d402f3d1a895-54518893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc32af76338f9b874050b806e9caea106119cb1f' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/footer.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '1904859d402f3d1a895-54518893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('page')->value=="login"){?>
	<div class="copyright"><!--
		<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/poweredby8.png" border="0" width="85" height="" />-->
		&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @FOOTER;?>

		
	</div>
<?php }else{ ?>
    <div class="page-footer">
        <div class="page-footer-inner"><!--
			 <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/poweredby.png" border="0" width="85" height="" />-->
           <small><?php echo $_smarty_tpl->getVariable('FOOTER')->value;?>
</small>
        </div>
        <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
        </div>
    </div>
<?php }?>