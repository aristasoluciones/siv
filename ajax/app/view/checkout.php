<?php
	header('Access-Control-Allow-Origin: *'); 
?>
<html>
<head>
<style type="text/css">
.principal
{

	float:left;
	background-color: #9fd3d8;
    text-align: center!important;
    padding: 11px 15px 13px;
    margin-right: 10px;
    height: 25px;
    width: 25px;
	font-size:22px;
	    color: #fff;
    -webkit-border-radius: 50%!important;
    -moz-border-radius: 50%!important;
}
.contentCheck {
  display: none;
}
</style>
</head>

<body>


<div onClick="menuCheck(1)" class = 'principal'>1</div>
<div onClick="menuCheck(2)" class = 'principal'>2</div>
<div onClick="menuCheck(3)" class = 'principal'>3</div>
<div style="clear:both"></div>

<div id="check_1" class='contentCheck'>

	<center>Dirección de Envio</center>
	<hr>
	 <?php include(DOC_ROOT.'/ajax/app/view/direccion.php'); ?>
</div>
<div id="check_2" class='contentCheck'>
	Información de Facturación
	<?php include(DOC_ROOT.'/ajax/app/view/facturacion.php'); ?>
</div>
<div id="check_3" class='contentCheck'>
Resumen
	<?php include(DOC_ROOT.'/ajax/app/view/resumen.php'); ?>
</div>

</body>
</html>
