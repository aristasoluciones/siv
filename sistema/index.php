<?php

	include_once('init.php');
	include_once('config.php');
	include_once(DOC_ROOT.'/libraries.php');
	
	if (!isset($_SESSION))
	  session_start();

	$pages = array(

	    #inicio de session y configuracion	
		'login',
		'logout', 
        'homepage',		
		'config',
		'rol',
		'config_role',
		'perm_accion',
		'usuario',
		'cat_electronico',
		'empresa',
		'nota',
		'colonia',
		
		
		#catalogos
		'cliente',
		'estado',
		'municipio',
		'sucursal',
		'puesto',
		'producto',
		'producto_cat',
		'imagen',

		'pedido',
		'detalle-pedido',

		'imagenes',
		
		#documentos
		'doc_crear',
		'doc_lista',
		'birthday',
		'age-ubication',
		'sex-ubication',
		'customer-basic',
		'order-ubication',
		'geolocation',
		
	);
	
	$page = $_GET['page'];
	$section = $_GET['section'];
	if(!in_array($page, $pages))
		$page = 'homepage';
	
	//echo $page; exit;

	include_once(DOC_ROOT.'/modules/user.php');
	include_once(DOC_ROOT.'/modules/'.$page.'.php');
	
	$smarty->assign('page', $page);
	$smarty->assign('section', $section);
	$smarty->assign('time', time());
		
	$pageTpl = ($section == '') ? $page : $page.'_'.$section;
	
	$smarty->assign('pageTpl', $pageTpl);
	$smarty->assign('lang', $lang);
	
	$usr = $_SESSION['Usr'];
	
    // echo "<pre>";
    // print_r($usr);
	// exit;
	
	$objRole->setRoleId($usr["role_id"]);
	$lisPermisos = $objRole->permisoSegunRol();
	// echo "<pre>"; print_r($lisPermisos);
	// exiT;
    //obtener todos los permisos del rol del usuario activo
    $permisos_general = $rbac->Roles->permissions($usr["role_id"],false);
    //convertir conjunto de permisos en un array de 1D para obtener solo la columna Title
    $permisos_titles =  $config->getOnlyColumnArray($permisos_general,"Title");
// echo "<pre>"; print_r($lisPermisos);
	// exiT;
    $typeUser =  $usr["role_id"];
    //asignar a una variable smarty el array de permisos para utilizarlo y mostrar ciertos accesos al menu
    $smarty->assign('privilegios',$lisPermisos);
    // $smarty->assign('privilegios',$permisos_titles);
	$smarty->assign('usr',$usr);
	$smarty->assign('typeUser',$typeUser);
	$smarty->assign('miColor',$miColor);
	$smarty->assign('FOOTER', FOOTER);

	if($page == 'login'){
		$smarty->display(DOC_ROOT.'/templates/login.tpl');
	
	}
	else{
	
		$_SESSION['Usr']['page'] = $page;
		$smarty->display(DOC_ROOT.'/templates/index.tpl');
	}
?>