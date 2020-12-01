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
                                        $fichapuntero=$_REQUEST['fcpt'];


                                        

                                        require_once('../views/materialapoyo/materialapoyoSelect.php'); 

									}
		public function Insertar()
								{

									$fichapuntero=$_REQUEST['ficid'];

									$datos= $this->materialapoyo;

									$datos->publicador=$_REQUEST['publicador'];
									$datos->titulo=$_REQUEST['titulo'];
									$datos->descrp=$_REQUEST['descrp'];
									$datos->fases=$_REQUEST['fases'];
									$datos->ficid=$_REQUEST['ficid'];

									date_default_timezone_set('America/Bogota');
									$fecha  = date("Ymd_His");
									
									$name = $_FILES['archivo']['name'];     
									$exts = explode('.',$name);             
									$exts = end($exts);                     
									$temp = $_FILES['archivo']['tmp_name']; 
									$ruta = '../assets/materialapoyo/'.$fichapuntero.'/';
									$ruta = $ruta.$fecha.".".$exts;

									if(is_uploaded_file($temp)){
										move_uploaded_file($temp,$ruta);										
									}else{
										echo "No se cargo la imagen";
									}
									
									$idfase=$_REQUEST['fases'];
																	
									$this->materialapoyo->Insert($ruta,$datos);

									require_once('../views/materialapoyo/materialapoyoSelect.php');


								}
		public function Actualizar()
		{					
									$fichapuntero=$_REQUEST['ficid'];
									$datos= $this->materialapoyo;

									$datos->id=$_REQUEST['map_id'];
									$datos->publicador=$_REQUEST['publicador'];
									$datos->titulo=$_REQUEST['titulo'];
									$datos->descrp=$_REQUEST['descrp'];
									$datos->fases=$_REQUEST['fases'];
									$datos->ficid=$_REQUEST['ficid'];

									$url = $_REQUEST['url'];
									file_exists($url) ? unlink($url): "";		
									
																													

									date_default_timezone_set('America/Bogota');
									$fecha  = date("Ymd_His");
								
									$name = $_FILES['archivo']['name'];     
									$exts = explode('.',$name);             
									$exts = end($exts);                     
									$temp = $_FILES['archivo']['tmp_name']; 
									$ruta = '../assets/materialapoyo/'.$datos->ficid.'/';
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


	}

?>