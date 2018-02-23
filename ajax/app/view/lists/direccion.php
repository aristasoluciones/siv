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


<form id="frm_1">
	<table class='formsjj'>
		<tr>
			<td>Calle:<input class="form-control" type="text" name="calle" id="calle" value="<?php echo $infoVta['calle']?>"></td>
		</tr>
		<tr>
			<td>Numero Interior:<input class="form-control" type="text" name="numInterior" id="numInterior" value="<?php echo $infoVta['numeroInterior']?>"></td>
		</tr>	
		<tr>	
			<td>Numero Exterior:<input class="form-control" type="text" name="numExterior" id="numExterior" value="<?php echo $infoVta['numeroExterior']?>"></td>
		</tr>
		<tr>
			<td>Entre Calle 1:<input class="form-control" type="text" name="entre1" id="entre1" value="<?php echo $infoVta['entreCalle1']?>"></td>
		</tr>	
		<tr>	
		<td>Entre Calle 2:<input type="text" class="form-control" name="entre2" id="entre2" value="<?php echo $infoVta['entreCalle2']?>" ></td>
		</tr>
		<tr>
		<td>Referencias de tu domicilio:<input type="text" class="form-control" name="referencia" id="referencia" value="<?php echo $infoVta['referencias']?>" ></td>
		</tr>
		<tr>
			<td>Codigo Postal:<input type="text" class="form-control" name="cp" id="cp"  value="<?php echo $infoVta['cp']?>"></td>
		</tr>
		<tr>
		<td>Colonia:<input type="text" class="form-control" name="colonia" id="colonia"  value="<?php echo $infoVta['colonia']?>"></td>
		</tr>	
		<tr>	
			<td>Delegación o Municipio:
			<select name="municipio" id="municipio" class="form-control">
				<option></option>
				<font color="black">{foreach from=$lstM item=item key=key}</font>
					<option value="{$item.municipioId}" {if $infoVta.municipio eq $item.municipioId} selected {/if}><font color="black"><?php echo $infoVta['nombre']?></font></option>
				{/foreach}
			</select>
			<!--<input type="text" name="municipio" id="municipio" value="{$infoVta.municipio}">
			--></td>
		</tr>
		<tr>
			
			<td>Coordenada X<input type="text" name="coordenadax" id="coordenadax" class="form-control"></td>
		</tr>
		<tr>
			<td>Coordenada Y<input type="text" name="coordenaday" id="coordenaday" class="form-control"></td>
			<td><br><br></td>
		</tr>
	</table>
	
</form>
</body>
</html>
