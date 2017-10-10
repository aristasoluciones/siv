<section class="container" >
				<hr class="vertical-space3">
 
    	<div class="latest-f-blog clearfix">
    		<div class="sixteen columns">
    			<div class="sub-content">
					<h1 class="h-sub-content">PRECIOS BAJOS GARANTIZADOS</h1>
				</div>
    		</div>
      		<div class="nine columns">
					<h2>Nota del Mes</h2>
       		 	<article class="blog-post clearfix ">
       		 		<figure class="pad-r20">
       		 			<img src="{$infoNota.rutaImagen}" alt="">
						
       		 		</figure>
         	 		<div class="one columns alpha">
            			<div class="blog-date-sec">
              				<h3></h3>
              				<span>||||</span>
              			</div>
          			</div>
	          	<div class="eight columns omega">
			
	            	<h4><a href="#">{$infoNota.titulo}</a></h4>
	              	<p class="blog-author"><strong></strong> {$infoNota.autor}<br>{$infoNota.fechaPublicacion}<strong></strong> <a href="#"></a></p>
	            <p class="blog-detail" style="text-align:justify">
				{$infoNota.texto}
				</p>
	            <a href=""  class="readmore">Ver</a> </div>
				
        </article>
		
      </div>
	  latest-f-blog-line-start 
	  <div class="seven columns omega">
	  <h2>Promociones</h2>
		{foreach from=$lstPromoinde item=item key=key}  
      	<article class="blog-line clearfix">
          	<a href="#" class="img-hover"><img src="{$WEB_ROOT}/images/productos_categorias/{$item.nombre_archivo}.{$item.extension}" alt=""></a>
			<a href="#" style="color:#622181; font-size:22px">{$item.nombre}</a>
			<br>
            <a href="#">{$item.descripcion}</a>

			  <p class="price"><small>$ {$item.precioAnterior}</small><span class="amount">$ {$item.precioActual}</span></p>
        </article>
		{/foreach}
      </div>
    </div>	
	
	<section class="latest-works">   	
<hr class="vertical-space1">
<div class="icon-top-title aligncenter">
<i class="li_diamond"></i>
<hr class="vertical-space1">
<h1>Producto Estrella</h1>
<h4>Son aquellos con un alto crecimiento y una alta cuota de mercado. Se caracterizan por ser productos líderes y requerir grandes inversiones para sostener su crecimiento. En el futuro, estos productos serán los denominados “Vacas lecheras”.</h4>
<br>

</div>
<hr class="vertical-space2">	
	<script src="isotope/isotope.js"></script>
    <script src="isotope/isotope-custom.js"></script>
    <script src="js/jquery.prettyPhoto.js" ></script>
</section>
	
<hr class="vertical-space3">
</section>