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

.ui-li-static.ui-collapsible > .ui-collapsible-heading {
    margin: 0;
}
.ui-li-static.ui-collapsible {
    padding: 0;
}
.ui-li-static.ui-collapsible > .ui-collapsible-heading > .ui-btn {
    border-top-width: 0;
}
.ui-li-static.ui-collapsible > .ui-collapsible-heading.ui-collapsible-heading-collapsed > .ui-btn,
.ui-li-static.ui-collapsible > .ui-collapsible-content {
    border-bottom-width: 0;
}
</style>
</head>
<body>
<h2></h2>

<div class="ui-content ui-content-no-overflow ui-content-no-padding ui-page-theme-a" data-form="ui-page-theme-a" data-theme="a" role="main">
	<ul data-role="listview" data-autodividers="false" data-inset="false" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
	<?php 
	foreach($lstmenu as $key=>$aux){
		if($aux['count'] <= 0){
	?>
		<li><a href="#" onClick='loadContenido(<?php echo $aux['menuId']?>)' class="ui-btn ui-btn-icon-right ui-icon-carat-r"><?php echo $aux['nombre']?></a></li>
	<?php
		}else{
	?>
		<li >
		<a href="#"  onClick='verSubMenu(<?php echo $aux['menuId']?>)' class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-plus"><?php echo $aux['nombre']?></a>
		<div id="divSub_<?php echo $aux['menuId']?>" style='display:none'>
			<?php 
				foreach($aux['submenu'] as $keys=>$auxs){
				?>
					<a href="#" onClick='loadContenido(<?php echo $auxs['menuId']?>)' class="ui-btn ui-btn-icon-right ui-icon-carat-r"><?php echo $auxs['nombre']?></a>
				<?php 
					}
				?>
		</div>
		</li>
	<?php 			
		}
	}
	?>
	</ul>
</div>

</body>
</html>


