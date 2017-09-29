<div class="table-container">
{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre </th>
            <th>Descripcion </th>
            <th>Encargado </th>
            <th>Direccion </th>
            <th>Horarios </th>
            <th>Status </th>
            <th>Acci&oacute;n </th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros item=item key=key}        	
        <tr>
            <td>{$key+1}</td>
            <td>{$item.nombre}</td>
            <td>{$item.descripcion}</td>
            <td>{$item.encargado}</td>
            <td>{$item.direccion}</td>
            <td>{$item.horario}</td>
            <td>{$item.status}</td>
			<td><div align="center">
               {if in_array('edit_sucursal',$privilegios) or $Usr.role_id eq 1}
				<a href="javascript:void(0)" onClick="EditReg({$item.sucursalid})" title="Editar sucursal">
					<img src="{$WEB_ROOT}/images/png-icon/big/glyphicons_150_edit.png" border="0">
				</a>
                {/if}
				{if in_array('active_sucursal',$privilegios) or $Usr.role_id eq 1}
                    {if $item.status=="Baja"}
                        <a href="javascript:void(0)" onClick="ActiveReg({$item.sucursalid})" title="Activar sucursal">
                            <img src="{$WEB_ROOT}/images/icons/activar.png" border="0">
                        </a>
                    {else}
                    <a href="javascript:void(0)" onClick="RemoveReg({$item.sucursalid})" title="Desactivar sucursal">
                        <img src="{$WEB_ROOT}/images/icons/desactivar.png" border="0">
                    </a>
                    {/if}
                {/if}
				
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