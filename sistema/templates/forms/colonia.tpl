<div class="row-fluid">
  <div class="tab-pane active" id="tab_0">
	<div style="margin:-11px" class="portlet" >
 <!-- <div class="portlet-title">
         <div class="caption"><i class="icon-reorder"></i>{if !$info.view}Ingrese los {/if}Datos</div>                
      </div>-->
      <div class="portlet-body form">
       <!-- BEGIN FORM-->
		<form id="frmGral" action="#" class="form-horizontal form-bordered form-label-stripped">
			<input type="hidden" name="type" value="update" />
			<input type="hidden" name="id" value="{$info.coloniaId}" />
			<input type="hidden" name="type" value="save" />

		  <div class="form-body">
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Colonia</label>
					<div class="col-md-9">
							<input type="text" class="form-control" name="colonia" value="{$info.nombreColonia}"  />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Municipio</label>
					<div class="col-md-9">
						<select name="municipioId" id="municipioId" class="bs-select form-control input-medium">
						<option value=""></option>
						{foreach from=$lstMus item=item  key=key}
                           <option value="{$item.municipioId}" {if $info.municipioId==$item.municipioId}selected{/if}>{$item.nombre}</option>
						{/foreach}
						</select>
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>X</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="x" value="{$info.x}"  />
					</div>
							
				</div>
				<div class="form-group">
					<label class="control-label col-md-3"><span class="reqIcon"> * </span>Y</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="y" value="{$info.y}"  />
					</div>
							
				</div>
				
				
           </div>         
             </form>
                <!-- END FORM-->                  
            </div>
       </div>
    </div>
</div>