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
		

			// $student->setUserId($_POST["usuarioId"]);
			// $info = $student->GetInfo();
			// echo DOC_ROOT."/alumnos/".$info["userId"].".jpg";
			// if(file_exists(DOC_ROOT."/alumnos/".$info["userId"].".jpg"))
			// {
				// echo 'si';
				// $urlFoto = "<img src='".WEB_ROOT."/alumnos/".$info["userId"].".jpg?".rand()."' style='width:100px; height:100px; border-radius: 50%;' />";
				// $fotoHeader = "<img src='".WEB_ROOT."/alumnos/".$info["userId"].".jpg?".rand()."' style='width:30px; border-radius: 50%;' />";
			// }else{
				// echo  'no';
				// $urlFoto = "<img src='".WEB_ROOT."/alumnos/no_foto.JPG' style='width:100px; border-radius: 50%;' />";
				// $fotoHeader = "<img src='".WEB_ROOT."/alumnos/no_foto.JPG' style='width:30px; border-radius: 50%;' />";
			// }
			
			// $activeCourses = $student->StudentCourses("activo", "si");
			// $inactiveCourses = $student->StudentCourses("inactivo", "si");
			// $finishedCourses = $student->StudentCourses("finalizado");
			
			
			// echo "ok[#]";
			// echo $fotoHeader;
			// echo "[#]";
			// include(DOC_ROOT.'/ajax/app/view/perfil-inicio.php');
			// echo "[#]";
			// include(DOC_ROOT.'/ajax/app/view/curricula-activa.php');
			// echo "[#]";
			// include(DOC_ROOT.'/ajax/app/view/curricula-inactiva.php');
			// echo "[#]";
			// include(DOC_ROOT.'/ajax/app/view/curricula-finalizada.php');
			// echo "[#]";
			// echo count($activeCourses);
			// echo "[#]";
			// echo count($inactiveCourses);
			// echo "[#]";
			// echo count($finishedCourses);
					
		break;
		
	
	}

?>