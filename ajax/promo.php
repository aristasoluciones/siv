<?php
// echo "<pre>"; print_r($_POST);
// exit;
include_once('../init.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();

$page = 'usuario';

$smarty->assign('titleFrm','Usuario');
$smarty->assign('page',$page);

switch($_POST['type']){
	
	case "SaveEncuesta":
		
		// echo '<pre>'; print_r($_POST);
		// exit;
		if($encuesta->SaveEncuestaCliente()){
			echo 'ok[#]';
			echo '<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert">×</button>
			Las preguntas se enviaron satisfactoriamente, Gracias por participar. 
			</div>';
		}else{
			echo 'fail[#]';
		}
		// echo "ok[#]";
		// $smarty->assign('lstCar',$lstCar);
		// $smarty->display(DOC_ROOT.'/templates/carrito.tpl');

		
	
	
	
}//switch
	
	
	
	
	

?>