<?php

	require_once('../models/horario.php');

	class HorarioController
	{	
		private $horario;

		function __Construct()	{
							  		$this->horario= new Horario(); 		
							  	}

		public function Index()
								{ 

									require_once('../views/horario/horarioView.php');

								}

		public function Insertar()
								{	 				
									date_default_timezone_set('America/Bogota');
									$fecha  = date("Ymd_His");
								
									$name = $_FILES['archivo']['name'];     
									$exts = explode('.',$name);             
									$exts = end($exts);                     
									$temp = $_FILES['archivo']['tmp_name']; 
									$ruta = "../assets/horarios/";
									$ruta = $ruta.$fecha.".".$exts;

									if(is_uploaded_file($temp)){
										move_uploaded_file($temp,$ruta);										
									}else{
										echo "No se cargo el archivo";
									}			
									
									$datos = $this->horario;

									$datos->url = $ruta;
									$datos->triini = $_REQUEST['triini'];
									$datos->trifin = $_REQUEST['trifin'];
									$datos->trinum = $_REQUEST['trinum'];
									$datos->fichaid	= $_REQUEST['fichaid'];
																	
									$this->horario->Insert($datos);

									require_once('../views/horario/horarioSelect.php');
								}

		public function Eliminar()
								{			
									$url = $_REQUEST['url'];
									file_exists($url) ? unlink($url): "";									

									$this->horario->Delete($_REQUEST['id']);
									require_once('../views/horario/horarioSelect.php');
								}

		public function Actualizar()
									{					
										$url = $_REQUEST['url'];
										file_exists($url) ? unlink($url): "";		
										
										$datos = $this->horario;																				

										date_default_timezone_set('America/Bogota');
										$fecha  = date("Ymd_His");
									
										$name = $_FILES['archivo']['name'];     
										$exts = explode('.',$name);             
										$exts = end($exts);                     
										$temp = $_FILES['archivo']['tmp_name']; 
										$ruta = "../assets/horarios/";
										$ruta = $ruta.$fecha.".".$exts;

										if(is_uploaded_file($temp)){
											move_uploaded_file($temp,$ruta);										
										}else{
											echo "No se cargo el archivo";
										}	
										
										$datos->id = $_REQUEST['id'];
										$datos->url = $ruta;
										$datos->triini = $_REQUEST['triini'];
										$datos->trifin = $_REQUEST['trifin'];
										$datos->trinum = $_REQUEST['trinum'];									
										
 										$this->horario->Update($datos);

 										require_once('../views/horario/horarioSelect.php');
									}						


    }
?>