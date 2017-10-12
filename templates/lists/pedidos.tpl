{**include file="{$DOC_ROOT}/templates/boxes/messages.tpl"**}
<form id="frmGral" onsubmit="return false;">
<input type="hidden" name="type" id="type" value="updateCar">
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">#</div></th>
            <th width="200"><div align="center">Folio</div></th>
            <th width="200"><div align="center">Fecha de Solicitud</div></th>
            <th width="200"><div align="center">Hora de Solicitud</div></th>
            <th width="200"><div align="center">Num Productos</div></th>
            <th class="hidden-480" width="150"><div align="center">Subtotal</div></th>
            <th class="hidden-480" width="200"><div align="center">I.V.A.</div></th>
            <th class="hidden-480"><div align="center">Total</div></th>
            <th class="hidden-480"><div align="center">Estatus</div></th>
            <th class="hidden-480"><div align="center">Acciones</div></th>
        </tr>
    </thead>
    <tbody>

    	{foreach from=$lstCar.result item=item key=key}        	
        <tr class="odd gradeX">
			<td>
			{$key+1}
			</td>
			<td><div align="center">{$item.folio}</div></td>
			<td><div align="center">{$item.fecha}</div></td>
			<td><div align="center">{$item.hora}</div></td>
            <td>
				{$item.countVta}
			</td>
			<td><div align="center">${$item.subtotal|number_format:2:'.':','}</div></td>
            <td><div align="center">$</div></td>
            <td><div align="center">${$item.montoTotal|number_format:2:'.':','}</div></td>
            <td><div align="center">{$item.estatus}</div></td>
            <td>
				<div align="center">
					<a href="{$WEB_ROOT}/ajax/pdf.php?id={$item.ventaId}" target='_blank'>
						<img src="{$WEB_ROOT}/images/ped.png">
					</a>
				</div>
			</td>

        </tr>
		
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="6"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>
</form>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}