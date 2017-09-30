<?php /* Smarty version Smarty3-b7, created on 2017-09-30 10:57:54
         compiled from "C:/wamp/www/siv/webmaster/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2366959cfbf028cdfd0-35251884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd71366636620aae3e5d3c1bfd96144adb3e42ba0' => 
    array (
      0 => 'C:/wamp/www/siv/webmaster/templates/footer.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '2366959cfbf028cdfd0-35251884',
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