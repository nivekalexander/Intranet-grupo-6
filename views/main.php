<?php
		require_once('../models/database.php');
		//$controller = 'noticia';
	try{
		if ( !ISSET($_REQUEST['ctrl']) )
		{
			require_once("error404.php");

		}
		else
		{
			
			
				$controller = strtolower($_REQUEST['ctrl']);
				$accion = ucwords(strtolower(ISSET($_REQUEST['acti']) ? $_REQUEST['acti'] : 'Index'));
				if(! file_exists("../controllers/$controller.controller.php"))
				{
					require_once("error404.php");
					
				}else{
					require_once("../controllers/$controller.controller.php");
					$controller = ucwords($controller).'Controller';
					$controller = new $controller;
					call_user_func(array($controller,$accion));
				}

			

		}
	}catch(Exception $e){

		require_once("error404.php");
		
	}
?>