<?php

	session_start();
	// Controladores en Forma SINGULAR *ASI LAS TABLAS ESTEN EN PLURAL*
	// Ctr = Controllador --> Nombre Modulo
	// Acc = Accion       --> Metodo a Realizar o Ejecutar
	require_once('../models/database.php');
	$controller = 'noticia';



	if (isset($_SESSION['SUsu']) And isset($_SESSION['SRol']) And isset($_SESSION['SLog']))
	{
		

		try{
			if ( !ISSET($_REQUEST['ctrl']) ){

				require_once("../controllers/$controller.controller.php");
				$controller = ucwords($controller).'Controller';
				$controller = new $controller;
				$accion = ucwords(strtolower(ISSET($_REQUEST['acti']) ? $_REQUEST['acti'] : 'Index'));
				call_user_func(array($controller,$accion));
				
			}else{

				//captura del grupo del usuario 
				if(isset($_POST['fichapuntero'])){

				 $_SESSION['grupoficha']=$_POST['fichapuntero'];
				 //captura del grupo del usuario en el gruposSelect
				 //Este solo sirve para admin e instructor
				}

				if($_SESSION['SRol']==3){

					echo 123;
					$_SESSION['grupoficha']=$_SESSION['SFic'];
					//captura del grupo del usuario aprendiz
				}

				
				//captura de opciones de menu
				if(isset($_POST['slidebar'])){

					 $_SESSION['slidebar']=$_POST['slidebar'];
					
				}
				if(isset($_REQUEST['slidebar'])){

					$_SESSION['slidebar']=$_REQUEST['slidebar'];
				   
				}				  
				//fin captura de opciones de menu

				$controller = strtolower($_REQUEST['ctrl']);
				$accion = ucwords(strtolower(ISSET($_REQUEST['acti']) ? $_REQUEST['acti'] : 'Index'));

				if(!file_exists("../controllers/$controller.controller.php")){

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

	}
	else
	{
	 	session_destroy();
	  	header("Location: ../index.php");
	  	die();
	}
?>
