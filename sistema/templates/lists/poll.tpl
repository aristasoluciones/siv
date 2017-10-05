<div class="table-container">
{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th>Clave</th>
            <th>Nombre </th>
            <th>Fecha de Registro</th>
            <th>Vigencia de la Encuesta</th>
            <th>Acci&oacute;n </th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr>
            <td>{$key+1}</td>
            <td>{$item.nombre}</td>
            <td>{$item.fechaRegistro}</td>
            <td>{$item.inicio} - {$item.fin}</td>
			<td><div align="center">
<a href="javascript:void(0)" class="btn btn-xs yellow"  onClick="EditReg({$item.usuarioId})" title="Editar">
					<i class="fa fa-pencil-square-o" ></i> 
				</a>
				
				<a href="javascript:void(0)" onClick="ActiveReg({$item.clienteId})" title="Editar">
                    <img src="{$WEB_ROOT}/images/icons/activar.png" border="0">
				</a>

				<a href="javascript:void(0)" onClick="RemoveReg({$item.clienteId})" title="Eliminar">
					<img src="{$WEB_ROOT}/images/icons/desactivar.png" border="0">
				</a>
				
				 <a href="{$WEB_ROOT}/question/x/{$item.encuestaId}"  title="AGREGAR PREGUNTAS">
					<img src="{$WEB_ROOT}/images/icons/calendar_edit.png" border="0">
				</a>
				
				<a href="javascript:void(0)" onClick="({$item.encuestaId})" title="Ver Resultado">
					<img src="{$WEB_ROOT}/images/png-icon/big/glyphicons_150_edit.png" border="0">
				</a>
            </div>
            </td>
        </tr>
        {foreachelse}
        <tr>
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>
</div>
<!--
{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}-->