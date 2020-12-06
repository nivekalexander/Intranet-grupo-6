<?php

    require_once('../models/materialapoyo.php');
	require_once('../models/fases.php');
	require_once('../models/usuario.php');

	class MaterialapoyoController
	{	
		private $materialapoyo;

		function __Construct()	{
                                      $this->materialapoyo= new Materialapoyo();
                                      $this->fases= new Fases(); 	 	
							  	}

		public function Index()
								{
									   
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									require_once('../views/materialapoyo/materialapoyoView.php');
									require_once('../views/frames/firtsfooter.php');
									require_once('../views/frames/footer.php');
                                }
        public function Faseconfirmar()
                                    {
                                        
                                        


                                        $idfase=$_REQUEST['fase'];


                                        require_once('../views/materialapoyo/materialapoyoSelect.php'); 

									}
		public function Insertar()
								{

									

									$datos= $this->materialapoyo;

									$datos->publicador=$_REQUEST['publicador'];
									$datos->titulo=$_REQUEST['titulo'];
									$datos->descrp=$_REQUEST['descrp'];
									$datos->fases=$_REQUEST['fases'];
									$datos->ficid=$_SESSION['grupoficha'];

									

									date_default_timezone_set('America/Bogota');
									$fecha  = date("Ymd_His");
									
									if(($name = $_FILES['archivo']['name'])!=null){

									 
									$exts = explode('.',$name);             
									$exts = end($exts);
									
									$datos->icono=$exts;
									
									$temp = $_FILES['archivo']['tmp_name']; 
									$ruta = '../assets/fichas/'.$_SESSION['grupoficha'].'/';
									$ruta = $ruta.$fecha.".".$exts;

									if(is_uploaded_file($temp)){

										if(move_uploaded_file($temp,$ruta)){

											

										}else{
											
										}

									}else{
										echo "No se cargo la imagen";
									}
									
								
																	
									$this->materialapoyo->Insert($ruta,$datos);
								}else{

									echo "Fallo la subida del archivo";

								}  
									
									
									$idfase=$_REQUEST['fases'];
									require_once('../views/materialapoyo/materialapoyoSelect.php');


								}
		public function Actualizar()
		{					
									
									$datos= $this->materialapoyo;

									$datos->id=$_REQUEST['map_id'];
									$datos->publicador=$_REQUEST['publicador'];
									$datos->titulo=$_REQUEST['titulo'];
									$datos->descrp=$_REQUEST['descrp'];
									$datos->fases=$_REQUEST['fases'];
									$datos->ficid=$_SESSION['grupoficha'];

									$url = $_REQUEST['url'];
									file_exists($url) ? unlink($url): "";		
									
																													

									date_default_timezone_set('America/Bogota');
									$fecha  = date("Ymd_His");
								
									$name = $_FILES['archivo']['name'];     
									$exts = explode('.',$name);             
									$exts = end($exts);  
									
									$datos->icono=$exts;

									$temp = $_FILES['archivo']['tmp_name']; 
									$ruta = '../assets/fichas/'.$_SESSION['grupoficha'].'/';
									$ruta = $ruta.$fecha.".".$exts;

									if(is_uploaded_file($temp)){

										move_uploaded_file($temp,$ruta);

									}else{

										echo "No se cargo la imagen";

									}	
									
									$idfase=$_REQUEST['fases'];

									$this->materialapoyo->Update($ruta,$datos);

									require_once('../views/materialapoyo/materialapoyoSelect.php');
			}
			public function Eliminar()
			{
				
				$idfase=$_REQUEST['idfase'];
				$map_id = $_REQUEST['map_id'];
				

				$map_archurl = $_REQUEST['map_archurl'];

				file_exists($map_archurl) ? unlink($map_archurl): "";

				$this->materialapoyo->Delect($map_id);

				

				require_once('../views/materialapoyo/materialapoyoSelect.php');

			}	


	}

?>