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
.enlace {
  color: white; /* el color del texto */
  font-family: Arial, Sans-serif;
  font-size: 12px;
}
</style>
</head>

<body>

<table>
	<tr>
		<td>Fecha</td>
		<td>Monto</td>
		<td>Estatus</td>
	</tr>
	<?php 
	foreach ($lstdata as $key=>$aux){
	?>
	<tr>
		<td><?php echo $aux['fecha']?></td>
		<td><?php echo $aux['montoTotal']?></td>
		<td><?php echo $aux['estatus']?></td>
	</tr>
	<?php 
	}
	?>
</table>


</body>
</html>
