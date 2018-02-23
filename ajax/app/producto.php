<?php
header('Access-Control-Allow-Origin: *');
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();

	switch($_POST["type"])
	{
		
		 case 'verProductos':
			$imagen->setValor($_POST["Id"]);
			$InfoCategoria = $imagen->InfoCategoria();
			$lstSub = $imagen->loadSubMenu(5);
			$countcar = $producto->countProductosinCar($_POST['usuarioId']);
			echo 'ok[#]';
			include(DOC_ROOT.'/ajax/app/view/productos.php');
			echo '[#]';
			include(DOC_ROOT.'/ajax/app/view/sub-menu.php');
			echo '[#]';
			echo trim($countcar);
			
		break;
		
		case "addCar":
		
		
		$producto->setId($_POST['Id']);
		$info = $producto->InfoProducto();
		
		$producto->setId($_POST['Id']);
		$producto->setCantidad(1);
		$producto->setCosto($info['precioActual']);
		$producto->setClienteId($_POST['usuarioId']);
		$producto->appAddCar();
		$countcar = $producto->countProductosinCar($_POST['usuarioId']);
		echo "ok[#]";
		echo "[#]";
		echo $countcar;

		break;
		
		case "Next": 
			// echo '<pre>'; print_r($_POST);
			if($producto->appNextPedido($_POST['usuarioId'])){
			echo "ok[#]";
			
			// $infoVta = $producto->infoVenta();
			// $lstDir = $producto->misDirecciones();
			// $lstRFC = $producto->misRFC();
			// $lstM = $producto->enumerateMunicipio();
			// $lstCar = $producto->detalleCarrito();
			
			// foreach($lstM  as $key=>$aux){
				
				// $lstM[$key]["nombre"] = utf8_encode($aux["nombre"]);
			// }
			
			// $smarty->assign('lstCar',$lstCar);
			// $smarty->assign('lstM',$lstM);
			// $smarty->assign('lstRFC',$lstRFC);
			// $smarty->assign('lstDir',$lstDir);
			// $smarty->assign('infoVta',$infoVta);
			// $smarty->display(DOC_ROOT.'/templates/lists/checkout.tpl');
		}else{
				echo "fail[#]";					
				$util->ShowErrors();					
			}
		break;

		case 'enviarPedido':
		
			// echo '<pre>'; print_r($_POST);
			if($producto->appenviarPedido($_POST['usuarioId'])){
				echo "ok[#]";
			}else{
				echo "fail[#]";
			}
			
		break;
	}

?>