<?php
	header('Access-Control-Allow-Origin: *'); 
?>
<html>
<head>
<style type="text/css">

.titulocontenedor {
	background:#f6f6f6;
	border: #ddd;
	border-top-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
	height:20px;
	padding: 14px 10px 10px 10px;
	color: #276e36;
	font-weight: bold;
}

.contenedor {
	background:white;
	border: #ddd;
	border-top-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
	padding: 14px 10px 10px 10px;
	color: #93a3b5;

}



.col-md-3{
	color: #93a2a9;
	font-weight: bold;
}



#izquierda {	
	float:left;
    border: 1px solid;
    border-radius: 3px 0 0 3px;
	padding: 3px 22px;
	font-size:12px;
	border-color: #165e26 ;
	
}
#derecha {	
	float:left;
    border: 1px solid;
    border-radius: 0 3px 3px 0;
	padding: 3px 22px;
	font-size:12px;
	border-color: #165e26 ;
	
}
.enlace{
	text-decoration:none; 
	color:white !important;
	font-size:14px;
	
    font-weight: 100;	
}
</style>
</head>

<body>


	<?php 
	if($_POST['type']=='verProductos'){
	?>
		<div id="izquierda" style='width: 30%;'>
		<a onClick='loadContenido(<?php echo 2?>)' class='enlace' >Realizar Pedido</a>
		</div>
		<div id="derecha" style='width: 30%;'>
		<a onClick='clickMenu(<?php echo 40?>)' class='enlace'>Carrito</a>
		</div>
		<div style='clear:both'>
		</div>
	<?php
	}
	?>	


</body>
</html>


