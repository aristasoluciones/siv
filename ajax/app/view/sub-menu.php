<?php
	header('Access-Control-Allow-Origin: *'); 
?>
<html>
<head>
<style type="text/css">

#izquierda {	
	float:left;
    border: 0px solid;
    border-radius: 3px 0 0 3px;
	padding: 3px 22px;
	font-size:12px;
	border-color: #165e26 ;
	text-align:center;
	
}

.enlace{
	text-decoration:none; 
	color:rgba(0,0,0,.4) !important;
	font-size:9px;
    font-weight: 100;	
}
#countCars{
	font-size:15px;
	color:red;
	font-weight: 600;
}

</style>
</head>

<body>


	<?php 
	foreach ($lstSub as $key=>$aux){
	?>
		<div id="izquierda" style='width: 35%;'>
		<?php if($aux['menuId']==7) {?>
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;
		<?php }?>
		<a onClick='loadContenido(<?php echo $aux['menuId']?>)' class='enlace' >
		<?php echo $aux['icono']?>
		<?php if($aux['menuId']==7) {?>
		<span id='countCars'></span>
		<?php }?>
		<br>
		<?php echo $aux['nombre']?>
		</a>
		</div>
		
	<?php
	}
	?>	
	<div style='clear:both'>
	</div>

</body>
</html>


