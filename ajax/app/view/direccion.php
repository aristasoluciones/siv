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


<h3><font color="black">Instrucciones:</font></h3>

<font color="black">1. Selecciona la dirección dentro de la lista de direcciones.</font><br>
<font color="black">2. Si eres nuevo usuario selecciona nueva dirección y complementa el formulario.</font><br>
<font color="black">3. Presiona Guardar y Continuar.</font><br>
<br>
<b><font color="black">Lista de Direcciones</font></b>
<select name="direccionId" id="direccionId" onChange="addDireccion()">
	<option value="">Nueva Direccion</option>
	<?php foreach($lstDir as $key=>$aux){ ?>   
	<option value="<?php echo $aux['direccionCId'];?>" <?php if ($infoVta['direccionCId'] == $aux['direccionCId']) {?> selected <?php }?> >
	<font color="black"><?php echo $aux['calle'];?></font></option>
	<?php }?>	
</select>
<div id="divDirec">
	 <?php include(DOC_ROOT.'/ajax/app/view/lists/direccion.php'); ?>
</div>

<div class="txtErrMsg" style="color:red"></div>
<div class="loader" ></div>
<button class="button small" style="background:#990000" onclick="Next(1)">Guardar y Continuar</button>

</body>
</html>
