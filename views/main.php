<?php
		require_once('../models/database.php');
		//$controller = 'noticia';
		$error="hola";
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
					$error="No Existe El Controlador";
					require_once("error404.php");
					
				}else{
					require_once("../controllers/$controller.controller.php");
					$controller = ucwords($controller).'Controller';
					$controller = new $controller;

					if(method_exists($controller,$accion)){
						
						call_user_func(array($controller,$accion));
						
					}else{
						$error="No Existe El Metodo";
						require_once("error404.php");

					}
					
				}

			

		}
	}catch(Exception $e){

		require_once("error404.php");
		
	}
?>