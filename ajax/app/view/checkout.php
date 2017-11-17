<?php
	header('Access-Control-Allow-Origin: *'); 
?>
<html>
<head>
<style type="text/css">
.speech-bubble {
  background: #276e36; /* el color de fondo */
  color: #FFF; /* el color del texto */
  font-family: Arial, Sans-serif;
  font-size: 12px;
  padding: 20px 10px 10px 10px;
  text-align: center;
  width: 270px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
}
.speech-bubble:after {
  border: solid 10px transparent;
  border-top-color: #276e36;  /* igual al color de fondo */
  border-bottom: 0;
  bottom: -20px;  /* igual al borde + el padding-bottom de la definición anterior */
  content: "";
  display: block;
  height: 0;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 0;
}
.contentCheck {
  display: none;
}
</style>
</head>

<body>


<div onClick="menuCheck(1)">Dirección de Envio</div>
<div onClick="menuCheck(2)">Información de Facturación</div>
<div onClick="menuCheck(3)">Resumen</div>


<div id="check_1" class='contentCheck'>
	 <?php include(DOC_ROOT.'/ajax/app/view/direccion.php'); ?>
</div>
<div id="check_2" class='contentCheck'>
	<?php include(DOC_ROOT.'/ajax/app/view/facturacion.php'); ?>
</div>
<div id="check_3" class='contentCheck'>
	<?php include(DOC_ROOT.'/ajax/app/view/resumen.php'); ?>
</div>

</body>
</html>
