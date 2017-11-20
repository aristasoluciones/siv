<?php
	header('Access-Control-Allow-Origin: *'); 
?>
<html>
<head>
<style type="text/css">
.contentCheck {
  display: none;
}
</style>
</head>

<body>


<!--
<font color="black">Instrucciones:</font></h3>
<font color="black">1. Selecciona la dirección dentro de la lista de direcciones.</font><br>
<font color="black">2. Si eres nuevo usuario selecciona nueva dirección y complementa el formulario.</font><br>
<font color="black">3. Presiona Guardar y Continuar.</font><br>-->
<b><font class="formsjj"><b>Lista de Direcciones</b></font></b>
<select name="direccionId" id="direccionId" onChange="addDireccion()" class="form-combo">
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
