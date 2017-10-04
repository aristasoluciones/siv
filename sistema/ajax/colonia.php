<?php
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	$page = 'colonia';
	
	$smarty->assign('titleFrm','Colonia');
	$smarty->assign('page',$page);
	
	switch($_POST['type']){
	
		case 'add':	
			$lstMus = $municipio->EnumerateAll();
				echo 'ok[#]';
				
				$smarty->assign('lstMus',$lstMus);
				
				$smarty->display(DOC_ROOT.'/templates/boxes/'.$page.'.tpl');											
			break;
		
		case 'edit':
				
				$municipio->setId($_POST['id']);
				$info = $municipio->InfoColonia();
				$lstMus = $municipio->EnumerateAll();
				echo 'ok[#]';	
				
				$smarty->assign('lstMus',$lstMus);				
				$smarty->assign('info',$info);				
				$smarty->display(DOC_ROOT.'/templates/boxes/'.$page.'.tpl');
																
			break;		
		case 'save':

			$idReg = $_POST['id'];

			$municipio->setColId($idReg);
			$municipio->setNombre($_POST['colonia']);
			$municipio->setId($_POST['municipioId']);
			$municipio->setX($_POST['x']);
			$municipio->setY($_POST['y']);

			$success = $municipio->SaveColonia();
			if($success){
			  echo 'ok[#]';
			}else{
				echo "fail[#]";					
				$util->ShowErrors();					
			}
				
		break;
							
		case 'delete':
				
				$municipio->setId($_POST['id']);
				
				if($municipio->DeleteColonia()){					
					echo 'ok[#]';				
				}
				
			break;
		
		case 'loadPage':
				
				

				$municipio->setPage($_POST['p']);								
				$registros = $municipio->EnumerateColonia();
				// $registros['result'] = $util->EncodeResult($registros['result']);	
				
				$util->PrintErrors2();
				
				echo 'ok[#]';			
			
				
					$smarty->assign('registros',$registros);
					$smarty->display(DOC_ROOT.'/templates/lists/'.$page.'.tpl');
				
			
			break;
			
			case 'buscarSol':
			
				$municipio->setNombre($_POST['colonia']);
				$registros = $municipio->EnumerateColonia();
					// echo '<pre>'; print_r($registros);
	// exit;
				echo 'ok[#]';
				$smarty->assign('registros',$registros);
				$smarty->display(DOC_ROOT.'/templates/lists/colonia.tpl');
			
			break;
		
	}//switch

?>