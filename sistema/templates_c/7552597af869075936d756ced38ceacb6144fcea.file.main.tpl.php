<?php /* Smarty version Smarty3-b7, created on 2017-10-02 15:02:15
         compiled from "C:/wamp/www/siv/sistema/templates/menus/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3185559d29b477ac885-15849539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7552597af869075936d756ced38ceacb6144fcea' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/menus/main.tpl',
      1 => 1506974413,
    ),
  ),
  'nocache_hash' => '3185559d29b477ac885-15849539',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--BEGIN SIDEBAR -->
<div class="page-sidebar navbar-collapse collapse">
	<ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
		<li class="sidebar-toggler-wrapper hide">
			<div class="sidebar-toggler">
				<span></span>
			</div>
		</li>   
    <li class="nav-item start <?php if ($_smarty_tpl->getVariable('page')->value=='homepage'){?>active<?php }?>">
        <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
" class="nav-link nav-toggle"> 
        <i class="icon-home"></i> 
        <span class="title">Inicio</span>
        <?php if ($_smarty_tpl->getVariable('page')->value=="homepage"){?>
		 <span class="selected"></span>
        <span class="arrow open"></span>
        <?php }?>
        </a>
    </li>
	<li class="heading">
       <h3 class="uppercase">Menu de opciones</h3>
    </li>
    <?php if (in_array("1",$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
    <li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='config'||$_smarty_tpl->getVariable('page')->value=='usuario'||$_smarty_tpl->getVariable('page')->value=='rol'||$_smarty_tpl->getVariable('page')->value=='config_role'||$_smarty_tpl->getVariable('page')->value=='perm_accion'||$_smarty_tpl->getVariable('page')->value=='empresa'){?>active open<?php }?>">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-settings"></i> 
        <span class="title">Configuraciones</span>
       <?php if ($_smarty_tpl->getVariable('page')->value=='rol'||$_smarty_tpl->getVariable('page')->value=='config_role'||$_smarty_tpl->getVariable('page')->value=='perm_accion'||$_smarty_tpl->getVariable('page')->value=='usuario'||$_smarty_tpl->getVariable('page')->value=='empresa'){?>
		 <span class="selected"></span>
         <span class="arrow open"></span>
         <?php }else{ ?>
		   <span class="arrow"></span>
        <?php }?>
        </a>
        <ul class="sub-menu">
        	<?php if (in_array('4',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
	        	<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='empresa'){?>active open<?php }?>">
					<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/empresa">
						<i class="icon-settings"></i>
						<span class="title">Datos empresa</span>
					</a>
				</li>
			<?php }?>
			
			<?php if (in_array('6',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
	        	<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='rol'||$_smarty_tpl->getVariable('page')->value=='config_role'){?>active open<?php }?>">
					<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/rol">
						<i class="icon-settings"></i>
						<span class="title">Roles</span>
					</a>
				</li>
			<?php }?>
			<?php if (in_array('7',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
				<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='usuario'){?>active open<?php }?>">
					<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/usuario">
						<i class="icon-settings"></i>
						<span class="title">Usuarios</span>
					</a>
				</li>
			<?php }?>
        </ul>
	</li>  
	<?php }?>

	<?php if (in_array(2,$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
    <li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='imagenes'||$_smarty_tpl->getVariable('page')->value=='sucursal'||$_smarty_tpl->getVariable('page')->value=='producto'||$_smarty_tpl->getVariable('page')->value=='imagen'||$_smarty_tpl->getVariable('page')->value=='puesto'||$_smarty_tpl->getVariable('page')->value=='nota'||$_smarty_tpl->getVariable('page')->value=='producto_cat'||$_smarty_tpl->getVariable('page')->value=='cliente'||$_smarty_tpl->getVariable('page')->value=='cat_electronico'){?>active open<?php }?>">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-briefcase"></i> 
        <span class="title">Pagina Web</span>
		<?php if ($_smarty_tpl->getVariable('page')->value=='sucursal'||$_smarty_tpl->getVariable('page')->value=='producto'||$_smarty_tpl->getVariable('page')->value=='puesto'||$_smarty_tpl->getVariable('page')->value=='imagen'||$_smarty_tpl->getVariable('page')->value=='imagenes'||$_smarty_tpl->getVariable('page')->value=='producto_cat'||$_smarty_tpl->getVariable('page')->value=='cliente'||$_smarty_tpl->getVariable('page')->value=='cat_electronico'||$_smarty_tpl->getVariable('page')->value=='nota'){?>
		 <span class="selected"></span>
         <span class="arrow open"></span>
        <?php }else{ ?>
		   <span class="arrow"></span>
		<?php }?>
		
        </a>
        <ul class="sub-menu">
			<?php if (in_array('8',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
	        	<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='cat_electronico'){?>active open<?php }?>">
					<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/cat_electronico">
						<i class="icon-settings"></i>
						<span class="title">Catalogo electronico</span>
					</a>
				</li>
			<?php }?>
			<?php if (in_array('9',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
			<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='cliente'){?>active open<?php }?>">
				<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/cliente">
					<i class="icon-user"></i>
					<span class="title">Clientes</span>
				</a>
			</li>
			<?php }?>
			<?php if (in_array('14',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('typeUser')->value==1){?> 
			<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='imagenes'){?>active open<?php }?>">
				<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/imagenes">
					<i class="icon-briefcase"></i>
					<span class="title">Imagenes</span>
				</a>
			</li>
			<?php }?>
			<?php if (in_array('10',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
	        	<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='nota'){?>active open<?php }?>">
					<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/nota">
						<i class="icon-settings"></i>
						<span class="title">Nota del mes</span>
					</a>
				</li>
			<?php }?>
           <?php if (in_array('11',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
			<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='producto'||$_smarty_tpl->getVariable('page')->value=='producto_cat'){?>active open<?php }?>">
				<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/producto">
					<i class="icon-briefcase"></i>
					<span class="title">Productos</span>
				</a>
			</li>
			<?php }?>
			<?php if (in_array('12',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
			<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='sucursal'){?>active open<?php }?>">
				<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/sucursal">
					<i class="icon-briefcase"></i>
					<span class="title">Sucursales</span>
				</a>
			</li>
			<?php }?>
			
			<?php if (in_array('puesto',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('typeUser')->value==1){?> 
			<!--<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='puesto'){?>active open<?php }?>">
				<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/puesto">
					<i class="icon-briefcase"></i>s
					<span class="title">Personal </span>
				</a>
			</li>-->
			<?php }?>
			<?php if (in_array('imagen',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('typeUser')->value==1){?> 
			<!--<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='imagen'){?>active open<?php }?>">
				<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/imagen">
					<i class="icon-briefcase"></i>
					<span class="title">Catalogo de imagenes</span>
				</a>
			</li>-->
			<?php }?>
			
			
        </ul>
	</li> 
	<?php }?>

	<!-- SECCION PEDIDOS-->

	<?php if (in_array(3,$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
	 <li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='pedido'||$_smarty_tpl->getVariable('page')->value=='detalle-pedido'){?>active open<?php }?>">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-list"></i> 
        <span class="title">Pedidos</span>
		<?php if ($_smarty_tpl->getVariable('page')->value=='pedido'||$_smarty_tpl->getVariable('page')->value=='detalle-pedido'){?>
		 <span class="selected"></span>
         <span class="arrow open"></span>
        <?php }else{ ?>
		   <span class="arrow"></span>
		<?php }?>
        </a>
        <ul class="sub-menu">

       		<?php if (in_array('13',$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 

        	<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='pedido'||$_smarty_tpl->getVariable('page')->value=='detalle-pedido'){?>active open<?php }?>">
				<a class="nav-link " href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/pedido">
					<i class="icon-list"></i>
					<span class="title">Lista de pedidos</span>
				</a>
			</li>
			<?php }?>
		</ul>


      </li>
	<?php }?>
	
	<?php if (in_array(3,$_smarty_tpl->getVariable('privilegios')->value)||$_smarty_tpl->getVariable('Usr')->value['role_id']==1){?> 
	 <li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='analisis-cliente'||$_smarty_tpl->getVariable('page')->value=='birthday'){?>active open<?php }?>">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-list"></i> 
        <span class="title">SIV</span>
		<?php if ($_smarty_tpl->getVariable('page')->value=='analisis-cliente'||$_smarty_tpl->getVariable('page')->value=='birthday'){?>
		 <span class="selected"></span>
         <span class="arrow open"></span>
        <?php }else{ ?>
		   <span class="arrow"></span>
		<?php }?>
        </a>
        <ul class="sub-menu">
			<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='analisis-cliente'||$_smarty_tpl->getVariable('page')->value=='birthday'){?>active open<?php }?>">
				<a href="javascript:;" onClick="verSubMenu(1)">
				Analisis de Clientes
				<span class="arrow"></span>
				</a>
				<ul class="sub-menu" style='display:none' id="mnuPrincipal_1">
					<li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/birthday">Cumpleaños</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/age-ubication">Edad por Colonias</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/sex-ubication">Genero por Colonias</a></li>
					<!--<li><a href="#">GeoInformacion</a></li>-->
					<li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/customer-basic">Personalizado</a></li>
				</ul>
			</li>
       		<li class="nav-item <?php if ($_smarty_tpl->getVariable('page')->value=='analisis'){?>active open<?php }?>">
				<a href="javascript:;" onClick="verSubMenu(2)">
				Analisis de Pedidos
				<span class="arrow"></span>
				</a>
				<ul class="sub-menu" style='display:none' id="mnuPrincipal_2">
					<li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/order-ubication">Pedidos por Colonias</a></li>
					<!--<li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/pep-time">Hora por Colonias</a></li>-->
					<li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/geolocation">GeoInformacion</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/pep-basic">Personalizado</a></li>
				</ul>
			</li>
		</ul>


      </li>
	<?php }?>


</ul>
</div>
<!-- END SIDEBAR MENU