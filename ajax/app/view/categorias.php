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

<div class="ui-content ui-content-no-overflow ui-content-no-padding ui-page-theme-a" data-form="ui-page-theme-a" data-theme="a" role="main">

	<table>
		<?php 
		foreach($lstProducto as $key=>$aux){
		?>
		<tr>
			<td style="text-align:center">
				<a  onClick="verProductos('<?php echo $aux["categoriaCId"]?>')"  border="0">
				<img src="<?php echo $aux['url'].$aux['imagen'].".".$aux['tipo'] ?>" style="width:20%">
				<br>
				<span><?php  echo $aux['nombre'] ?></span>
				</a>
			</td>
		</tr>
		<?php 
		}
		?>
	</table>
</div>


</body>
</html>
