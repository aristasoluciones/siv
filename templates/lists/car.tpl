{**include file="{$DOC_ROOT}/templates/boxes/messages.tpl"**}
<form id="frmGral" onsubmit="return false;">
<input type="hidden" name="type" id="type" value="updateCar">
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center"><font color="white">Imagen</font></div></th>
            <th width="200"><div align="center"><font color="white">Producto</font></div></th>
            <th class="hidden-480" width="150"><div align="center"><font color="white">Precio</font></div></th>
            <th class="hidden-480" width="200"><div align="center"><font color="white">Cantidad</font></div></th>
            <th class="hidden-480"><div align="center"><font color="white">Total</font></div></th>
            <th class="hidden-480" width="100"><div align="center"></div></th>
        </tr>
    </thead>
    <tbody>

    	{foreach from=$lstCar.carrito item=item key=key}        	
        <tr class="odd gradeX">
			<td>
				<img src="{$WEB_ROOT}/images/productos_categorias/{$item.nombre_archivo}.{$item.extension}" alt="">
			</td>
            <td>
				<font color="black">{$item.nombre}<br><font>
				{$item.descripcion}
			</td>
			<td><div align="center"><font color="black">${$item.precioActual|number_format:2:'.':','}</font></div></td>
            <td><div align="center"><input type="" name="cantidad_{$key}" id="cantidad_{$key}" value="{$item.cantidad}" style="width:50px"></div></td>
            <td><div align="center">${$item.total|number_format:2:'.':','}</div></td>
            <td><div align="center">
				<a href="javascript:void(0)" onClick="deleteCar('{$item.key}')" title="Eliminar">
					<img src="{$WEB_ROOT}/images/delete.png" border="0">
				</a>
				</div>
            </td>
        </tr>
		
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="6"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
		<tr>
			<td colspan="6" style="text-align: right !important">

			<a href="javascript:void(0)" style="background:white; color:#990000; border: 2px solid #990000; padding: 5px 15px" onClick="updateCar()">
			Actualizar Carrito
			</a>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><b><font color="black">Subtotal:</font></b></td>
			<td><font color="black">${$lstCar.total|number_format:2:'.':','}</font></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><b><font color="black">Total:</font></b></td>
			<td><font color="black">${$lstCar.total|number_format:2:'.':','}</font></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="text-align: right !important">
			<button class="button small" style="background:#990000" onclick=" location.href='{$WEB_ROOT}/checkout' ">Realizar Pedido</button>
			</td>
		</tr>
    </tbody>
</table>
</form>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}