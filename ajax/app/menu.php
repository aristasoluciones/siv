<?php
header('Access-Control-Allow-Origin: *'); 
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

	session_start();

	switch($_POST["type"])
	{
		
		 case '2':
		 
			
			$lstProducto = $imagen->EnumeraProductos();
			echo 'ok[#]';
			include(DOC_ROOT.'/ajax/app/view/categorias.php');
			// echo '[#]';
			// include(DOC_ROOT.'/ajax/app/view/sub-menu.php');
			
        break;
		
		case '3':
		 
			
			$producto->setClienteId($_POST['usuarioId']);
			$lstdata = $producto->misPedidos();
			echo 'ok[#]';
			include(DOC_ROOT.'/ajax/app/view/mis-pedidos.php');

			
        break;
		
		case '6':
			$infoVta = $producto->appinfoVenta($_POST['usuarioId']); 	
			$lstDir = $producto->appmisDirecciones($_POST['usuarioId']);
			$lstRFC = $producto->appmisRFC($_POST['usuarioId']);
			$lstCar = $producto->appdetalleCarrito($_POST['usuarioId']);
			
			$lstM = $producto->enumerateMunicipio();
			foreach($lstM  as $key=>$aux){
				
				$lstM[$key]["nombre"] = utf8_encode($aux["nombre"]);
			}

			echo 'ok[#]';
			include(DOC_ROOT.'/ajax/app/view/checkout.php');
		break;
		
		case '7':

			$lstdata = $producto->appdetalleCarrito($_POST['usuarioId']);
			// echo '<pre>'; print_r($lstdata);
			echo 'ok[#]';
			include(DOC_ROOT.'/ajax/app/view/carrito.php');
		break;
		
	
	}

?>