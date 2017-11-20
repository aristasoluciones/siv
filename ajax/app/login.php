<?php
header('Access-Control-Allow-Origin: *'); 
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

	session_start();

	switch($_POST["type"])
	{
		
		 case 'doLogin':
		 
			$username = strip_tags(trim($_POST['username']));
			$passwd = strip_tags(trim($_POST['passwd']));

			if($username == '' || $passwd == ''){
				echo 'fail[#]';
				echo 'empty';
				exit;
			}

			$user->setUsername($username);
			$user->setPasswd($passwd);
			if($Id = $user->DoLogin()){
				echo "ok[#]";
				echo $Id;
			}else{
				echo "fail[#]";
				echo 'data';
			}
			
        break;
		
		case 'inicio':
		
			$lstmenu = $imagen->loadMenu();
			echo 'ok[#]';
			
			// echo '<pre>'; print_r($lstmenu);
			include(DOC_ROOT.'/ajax/app/view/menu.php');
			// echo 'hola';
		break;
		
	
	}

?>