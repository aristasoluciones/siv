<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
<head><!--
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}-->
	{include file="{$DOC_ROOT}/templates/header.tpl"}
</head>

<body  onload="initialize()">
<h4 class="subtitle"></h4>
<hr class="vertical-space1">
<ul id="myTab" class="nav nav-tabs"><!--
<li><a href="#Service1" data-toggle="tab">Web </a></li>-->
<li {if $infoVta.paso eq 1} class="active" {/if}><a href="#Service2" data-toggle="tab"><font color="white">Dirección de Envio</font></a></li>
<li {if $infoVta.paso eq 2} class="active" {/if}><a href="#Service3" data-toggle="tab"><font color="white">Información de Facturación</font></a></li>
<li {if $infoVta.paso eq 3} class="active" {/if}><a href="#Service4" data-toggle="tab"><font color="white">Resumen</font></a></li>
</ul>
<div id="myTabContent" class="tab-content">
<!--
<div class="tab-pane" id="Service1">
<hr class="vertical-space1">
<article class="icon-box"><i class="li_lab"></i>
<h5 class="helvetic5">Web Design</h5>

<p>

</p>

</article>
</div>-->
<div class="tab-pane {if $infoVta.paso eq 1} active{/if}" id="Service2">
<hr class="vertical-space1">
<article class="icon-box">
<h5 class="helvetic5"></h5>
	{include file="{$DOC_ROOT}/templates/forms/direccion.tpl"}
</article>
</div>
<div class="tab-pane {if $infoVta.paso eq 2} active{/if}" id="Service3">
<hr class="vertical-space1">
<div class="icon-box">
<h5 class="helvetic5"></h5>
		{include file="{$DOC_ROOT}/templates/forms/facturacion.tpl"}
</div>
</div>

<div class="tab-pane {if $infoVta.paso eq 3} active{/if}" id="Service4">
<hr class="vertical-space1">
<article class="icon-box">
<h5 class="helvetic5"></h5>
	
<div class="txtErrMsg" style="color:red"></div>
<div class="loader" ></div>
{include file="{$DOC_ROOT}/templates/forms/resumen.tpl"}
<button class="button small" style="background:#990000" onclick="enviarPedido()">Enviar Pedido</button>
</article>
</div>


</div><!-- end -->


	{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
	<script type="text/javascript">
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins		   
		});
	</script>

    
</body>
</html>