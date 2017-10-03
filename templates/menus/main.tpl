<<<<<<< HEAD
<header id="header" style="background:#99ADAD; ">
=======
<header id="header" style="background:white; ">
>>>>>>> 0dd75d4433e5c800f7e8ef347bcf23a00dd2453c
				<div  class="container" >
				<div class="four columns logo">
				<br>
				<a href="index"><img src="{$WEB_ROOT}/images/logosiv11.png" width="" id="img-logo" alt="logo"></a></div>
				<div class="twelve columns top-inf alignright">
							<hr class="vertical-space">
							<div>
								<!--<img src="{$WEB_ROOT}/images/face.png" class="ls-bg" alt="" width="2%">
								<font color="white">Socializa con Nosotros</font>
								<br>-->
								<img src="{$WEB_ROOT}/images/cel.png" class="ls-bg" alt="" width="2%">
								&nbsp;&nbsp;<font color="black">01 (961) 65 69 104</font>
								<br>
								<img src="{$WEB_ROOT}/images/rep.png" class="ls-bg" alt="" width="2%">
								&nbsp;
								<font color="black">Servicio a Domicilio</font>
								<br>
								<font color="black" size='5'>{$countCar} </font><b><font color="white">Articulo(s)</font></b>
							</div>


							
							{if $usr.isLogged ne 1}
								<button class="button small" style="background:rgba(43, 13, 58, 0.65)" onclick=" location.href='{$WEB_ROOT}/login-customer' ">Iniciar Sesión</button>
								<button class="button small" style="background:rgba(43, 13, 58, 0.65)" onclick=" location.href='{$WEB_ROOT}/account-create' ">Crear Cuenta</button> 
							{else}
								<button class="button small" style="background:#96be14" onclick=" location.href='{$WEB_ROOT}/account' ">Mi Cuenta</button> 
								<button class="button small" style="background:#941601" onclick=" location.href='{$WEB_ROOT}/logout' ">Cerrar Sesión</button> 
								<b><font color="white">Hola ! {$usr.nombre}</font>
							{/if}
				  </div>
			  </div>

<nav id="nav-wrap" class="nav-wrap2 darknavi mn4">
<div class="container">
			<ul id="nav" class="sixteen columns">
			<li class="current"><a data-description="Start here" class="drp-aro" href="{$WEB_ROOT}/index">Inicio</a>
			  </li>
			{if $page eq "index"}
			<li>
				<a data-description="meet florida" class="drp-aro" href="javascript:void(0)" onClick="openNewN()">Nosotros </a>
			</li>
			{else}
			<li>
				<a data-description="meet florida" class="drp-aro" href="{$WEB_ROOT}/nosotros">Nosotros </a>
			</li>
			{/if}
			  {if $page eq "index"}
				<li><a data-description="template features" class="drp-aro"  href="javascript:void(0)" onClick="openNew()">Productos </a>
			  </li>
				{else}
					<li><a data-description="template features" class="drp-aro"  href="#" onClick="">Productos </a>
						<ul>
							{foreach from=$lstProducto item=item key=key}       
							  <li><a href="{$WEB_ROOT}/producto/q/{$item.categoriaCId}">{$item.nombre}</a></li>
							{/foreach}
						</ul>
					  </li>
				{/if}
			
			<li>
				<a data-description="meet florida" class="drp-aro" href="javascript:void(0)" onClick="openNewP()">Promociones </a>
			</li>
			<li><a data-description="Our idea" href="#">Sucursales </a>
				<ul>
					{foreach from=$lstSucursales item=item key=key}       
					  <li><a href="{$WEB_ROOT}/sucursal/q/{$item.sucursalCId}">{$item.nombre}</a></li>
					{/foreach}
				</ul>
			  </li>
			<li><a data-description="We have done" class="drp-aro" href="{$WEB_ROOT}/ubicanos">Ubícanos</a>
			  </li>
			<li><a data-description="Mega Menu" href="{$WEB_ROOT}/contacto">Contacto</a>
				</li>
			</ul>
		</div>
</nav>
</header>