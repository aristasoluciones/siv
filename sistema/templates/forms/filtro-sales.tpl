<form  enctype="multipart/form-data" id="frmFiltroSales" action="#" method="post" class="form-horizontal">
    <input type="hidden" name="type" value="doSearchSales">
     <div class="form-body">
        <div class="row" align="center">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label"><span class="reqIcon"></span>Periodo</label>
                    <div class="input-group input-large">
                       <input class="form-control" name="finicial" id="finicial" onclick="Calendario(this)">
                        <span class="input-group-addon">al</span>
                        <input class="form-control" name="ffinal" id="ffinal" onclick="Calendario(this)">
                    </div>
                </div>
             </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label"><span class="reqIcon"></span>Categoria</label>
                    <select name="categoria" id="categoria" class="form-control input-medium">
                       <option value="">Seleccionar...</option>
                       {foreach from=$categorias key=key item=item}
                        <option value="{$item.categoriaId}">{$item.nombre}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label"><span class="reqIcon"></span>Producto</label>
                    <input type="text" name="nameProducto" id="nameProducto"  class="form-control" />
                </div>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-5 col-md-9">
                <button type="button" class="btn green"  onclick="doSearch()">Buscar</button>
            </div>
        </div>
    </div>
</form>
