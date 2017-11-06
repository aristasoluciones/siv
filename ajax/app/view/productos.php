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

		<?php 
		foreach($InfoCategoria['result'] as $key=>$aux){
		?>

				<a  onClick="verProductos(<?php echo $aux["categoriaId"]?>)"  border="0">
				<img src="<?php echo WEB_ROOT.$aux['url']."/images/productos_categorias/".$aux['nombre_archivo'].".".$aux['extension']; ?>" style="width:20%">
				<br>
				<span><?php  echo $aux['nombre'] ?></span>
				</a>
				<button  href="javascript:void(0)" class="button small" style="background:#990000" onclick="addCar('<?php echo $aux['producto_categoria_id'] ?>')">Agregar A Carrito </button>

		<?php
			if (($key+1)%2==0){
				echo "<br>";
				echo "<br>";
				echo "<br>";
			}
		}
		?>
	
</div>


</body>
</html>
