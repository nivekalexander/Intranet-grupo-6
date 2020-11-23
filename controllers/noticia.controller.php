<?php

	require_once('../models/noticia.php');

	class NoticiaController
	{	
		private $noticia;

		function __Construct()	{
							  		$this->noticia= new Noticia(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{ 
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									require_once('../views/noticia/noticiaView.php');
									require_once('../views/frames/firtsfooter.php');
									require_once('../views/frames/footer.php');
								}

		public function Insertar()
								{	 				
									date_default_timezone_set('America/Bogota');
									$fecha  = date("Ymd_His");
								
									$name = $_FILES['archivo']['name'];     
									$exts = explode('.',$name);             
									$exts = end($exts);                     
									$temp = $_FILES['archivo']['tmp_name']; 
									$ruta = "../assets/img/img-news/";
									$ruta = $ruta.$fecha.".".$exts;

									if(is_uploaded_file($temp)){
										move_uploaded_file($temp,$ruta);										
									}else{
										echo "No se cargo la imagen";
									}												
																	
									$this->noticia->Insert($ruta);

									require_once('../views/noticia/noticiaSelect.php');
								}

		public function Eliminar()
								{
									$this->noticia->Delete($_REQUEST['id']);
									require_once('../views/noticia/noticiaSelect.php');
								}

		public function Actualizar()
									{							
										$datos = $this->noticia;																				

										date_default_timezone_set('America/Bogota');
										$fecha  = date("Ymd_His");
									
										$name = $_FILES['archivo']['name'];     
										$exts = explode('.',$name);             
										$exts = end($exts);                     
										$temp = $_FILES['archivo']['tmp_name']; 
										$ruta = "../assets/img/img-news/";
										$ruta = $ruta.$fecha.".".$exts;

										if(is_uploaded_file($temp)){
											move_uploaded_file($temp,$ruta);										
										}else{
											echo "No se cargo la imagen";
										}	
										
										$datos->url = $ruta;
										$datos->id = $_REQUEST['id'];
										
 										$this->noticia->Update($datos);

 										require_once('../views/noticia/noticiaSelect.php');
									}						


    }
?>