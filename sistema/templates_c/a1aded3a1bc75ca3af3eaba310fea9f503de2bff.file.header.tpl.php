<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:18:32
         compiled from "C:/wamp/www/siv/sistema/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:577159d55e3898a770-13097225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1aded3a1bc75ca3af3eaba310fea9f503de2bff' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/header.tpl',
      1 => 1507079382,
    ),
  ),
  'nocache_hash' => '577159d55e3898a770-13097225',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page-header navbar navbar-fixed-top" >
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner " >  <!-- agregar container para page boxed-->
	  <!-- BEGIN LOGO -->
		<div class="page-logo">
		  <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
">
			<img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logo.png?dd" alt="logo" class="logo-default" width="90"  height="30px"/> 
		  </a>
		  <div class="menu-toggler sidebar-toggler">
				<span></span>
		  </div>
		</div>
		<!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			<span></span>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->  
		<div class="top-menu">
            <ul class="nav navbar-nav pull-right">                 
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/escudo.png" class="img-circle" />
                    <span class="username username-hide-on-mobile"><?php echo $_smarty_tpl->getVariable('Usr')->value['usuario'];?>
</span>
                    <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">                        
                        <li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/logout"><i class="icon-key"></i> Salir</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                
            </ul>
		</div>
         <!-- END TOP NAVIGATION MENU --> 
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>