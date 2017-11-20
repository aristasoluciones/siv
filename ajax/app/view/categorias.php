<?php
header('Access-Control-Allow-Origin: *'); 
foreach($lstProducto as $key=>$aux){
?>
	<div  class="boxCategoria">
		<a  onClick="verProductos('<?php echo $aux["categoriaCId"]?>')"  border="0">
			<div class="bodyCategoria"  >
			<img src="<?php echo $aux['url'].$aux['imagen'].".".$aux['tipo'] ?>" style="max-width:90%; max-height:90%">
			</div>
			<div class="footerCategoria" >
			<?php  echo $aux['nombre'] ?>
			</div>
		</a>
	</div>
<?php 
	if (($key+1)%2==0){
			echo "<div style='clear:both'></div><br><br><br>";
	}
}
?>

