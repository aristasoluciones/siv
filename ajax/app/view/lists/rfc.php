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



	<form id="frm_2">
	<table>
		<tr>
			<td><font color="black">Razón Social:</font><input type="text" name="nombreFac" id="nombreFac"  value="<?php echo $infoVta['rs']?>"></td>
		</tr>
		<tr>
			<td><font color="black">RFC:</font><input type="text" name="rfcFac" id="rfcFac"  value="<?php echo $infoVta['rfc']?>"></td>
		</tr>
		<tr>
			<td><font color="black">Calle:</font><input type="text" name="calleFac" id="calleFac"  value="<?php echo $infoVta['cf']?>"></td>
		</tr>
		<tr>
			<td><font color="black">Num Interior:</font><input type="text" name="numInteriorFac" id="numInteriorFac"   value="<?php echo $infoVta['ni']?>"></td>
		</tr>
		<tr>
			<td><font color="black">Num Exterior:</font><input type="text" name="numExteriorFac" id="numExteriorFac"  value="<?php echo $infoVta['ne']?>"></td>
		</tr>
		<tr>
			<td><font color="black">Colonia:</font><input type="text" name="coloniaFac" id="coloniaFac"   value="<?php echo $infoVta['cf']?>"></td>
		</tr>
		<tr>
			<td><font color="black">Codigo Postal:</font><input type="text" name="cpFac" id="cpFac"  value="<?php echo $infoVta['cpf']?>"></td>
		</tr>
		<tr>
			<td><font color="black">Estado:</font><input type="text" name="estadoIdFac" id="estadoIdFac"  value="<?php echo $infoVta['ef']?>"></td>
		</tr>	
		<tr>	
			<td><font color="black">Delegación o Municipio:</font><input type="text" name="municipioFac" id="municipioFac"  value="<?php echo $infoVta['mf']?>"></td>
		</tr>
		<tr>
			
			
			<td><font color="black">Telefono:</font><input type="text" name="telefonoFac" id="telefonoFac"  value="<?php echo $infoVta['tf']?>"></td>
			</tr>
			<tr>
			<td><font color="black">Correo Electronico:</font><input type="text" name="correoFac" id="correoFac"  value="<?php echo $infoVta['cf']?>"></td>
			<td></td>
		</tr>
	</table>
	
</form>

	
</body>
</html>
