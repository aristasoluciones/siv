<?php
	header('Access-Control-Allow-Origin: *'); 
?>

<?php 
foreach($InfoCategoria['result'] as $key=>$aux){
?>
	<div class="boxProductos" >
		<a  onClick="verProductos('<?php echo $aux["categoriaCId"]?>')"  border="0"  style='color: rgba(0,0,0,.4)'>
			<div class="bodyProductos" >
			<img src="<?php echo WEB_ROOT."/images/productos_categorias/".$aux['nombre_archivo'].".".$aux['extension']; ?>" style="max-width:90%; max-height:90%">
			</div>
			<hr>
			<div class="footerProductos" class='gray' >
			<font color="#95BE14">$ <?php  echo $aux['precioActual'] ?></font><br>
			<font style="text-decoration: line-through">$ <?php  echo $aux['precioAnterior'] ?></font><br>
			<?php  echo $aux['nombre'] ?><br>
			<a  href="javascript:void(0)" class="ui-btn red"  onclick="addCar('<?php echo $aux['producto_categoria_id'] ?>')">
			Agregar A Carrito 
			</a>

			</div>
		</a>
	</div>
<?php 
    	if (($key+1)%2==0){
				echo "<div style='clear:both'></div>
				<br><br><br>
				<br><br><br>
				";
		}
}
?>


		
	