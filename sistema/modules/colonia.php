<?php
  	
	//comprobar privilegios de acceso a modulo
	//$role->setRoleId($_SESSION['Usr']["role_id"]);
	//$role->accesoAutorizado(37);
	
	$util->PrintErrors2();

	//$registros = $municipio->EnumerateColonia();
	

	$smarty->assign('registros',$registros);	
?>

