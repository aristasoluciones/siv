<?php /* Smarty version Smarty3-b7, created on 2017-09-30 10:57:54
         compiled from "C:/wamp/www/siv/webmaster/templates/forms/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196459cfbf027a5190-12019153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a516e84e61da1675cd47ed57a89839c337df69e' => 
    array (
      0 => 'C:/wamp/www/siv/webmaster/templates/forms/login.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '196459cfbf027a5190-12019153',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="background-color: rgba(255,255,255, 0.3)">
    	<a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
" >
            <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logo.png" border="0" width="100%"   />
        </a>
	</div>	

<form class="login-form" id="frmLogin" method="post">
<input type="hidden" name="type" value="doLogin">
    <h3 class="form-title">Iniciar Sesi&oacute;n</h3>
    <div class="alert alert-danger display-hide" id="txtErrMsg">
		<button class="close" data-close="alert"></button>
		<span id="txtErrMsg"></span>
    </div>	
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Correo Electr&oacute;nico:</label>
        <div class="controls">
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Usuario" name="username" id="username" autocomplete="off"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Contrase&ntilde;a:</label>
        <div class="controls">
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" placeholder="Contrase&ntilde;a" name="password" id="password" autocomplete="off"/>
            </div>
        </div>
    </div>
    <div align="center" id="loader"></div>
       
    <div class="form-actions" class="content" style="background-color: rgba(255,255,255, 0.0)">
        <label class="checkbox">				
        </label>
        <button type="button" class="btn green pull-right" onClick="DoLogin()">
        Ingresar <i class="m-icon-swapright m-icon-white"></i>
        </button>            
    </div>
	<div class="forget-password">
		<!--<h4>¿ Olvidaste tu contraseña ?</h4>
		<p> Recuperar
		<a href="javascript:;" id="forget-password"> Aqui </a> </p>-->
    </div>
   <!--  <div class="create-account">
		<p> ¿ No tienes una cuenta ?
			<a href="javascript:;" id="register-btn"> Registrate </a>
		</p>
    </div> -->	
</form>