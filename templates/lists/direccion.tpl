<form id="frm_1">
	<table>
		<tr>
			<td>Calle:<input type="text" name="calle" id="calle" value="{$infoVta.calle}"></td>
			<td>Numero Interior:<input type="text" name="numInterior" id="numInterior" value="{$infoVta.numeroInterior}"></td>
			<td>Numero Exterior:<input type="text" name="numExterior" id="numExterior" value="{$infoVta.numeroExterior}"></td>
		</tr>
		<tr>
			<td>Entre Calle 1:<input type="text" name="entre1" id="entre1" value="{$infoVta.entreCalle1}"></td>
			<td>Entre Calle 2:<input type="text" name="entre2" id="entre2" value="{$infoVta.entreCalle2}"></td>
			<td>Referencias de tu domicilio:<input type="text" name="referencia" id="referencia" value="{$infoVta.referencias}"></td>
		</tr>
		<tr>
			<td>Codigo Postal:<input type="text" name="cp" id="cp" value="{$infoVta.cp}"></td>
			<td>Colonia:<input type="text" name="colonia" id="colonia" value="{$infoVta.colonia}"></td>
			<td>Delegación o Municipio:
			<select name="municipio" id="municipio">
				<option></option>
				{foreach from=$lstM item=item key=key}
					
					<option value="{$item.municipioId}" {if $infoVta.municipio eq $item.municipioId} selected {/if}>{$item.nombre}</option>
				{/foreach}
			</select>
			<!--<input type="text" name="municipio" id="municipio" value="{$infoVta.municipio}">
			--></td>
		</tr>
		<tr>
			
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	
</form>