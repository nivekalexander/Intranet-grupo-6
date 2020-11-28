<?php

	require_once('../models/anuncio.php');



	class AnuncioController
	{	
		private $anuncio;

		function __Construct()	{
							  		$this->anuncio= new Anuncio(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{
									
									
									echo $_SESSION['fichapuntero'];

									require_once('../views/anuncio/anuncioView.php');
									
								}
		

		public function Insertar()
								{

									$datos= $this->anuncio;

									$datos->titulo 	= $_REQUEST['titulo'];
									$datos->descrp 	= $_REQUEST['descrp'];
									$datos->fchfin	= $_REQUEST['fchfin'];
									$datos->usuid 	= $_REQUEST['usuid'];
									$datos->ficid 	= $_REQUEST['ficid'];
									
									$fichapuntero  	= $_REQUEST['ficid'];

									$this->anuncio->Insert($datos);

									require_once('../views/anuncio/anuncioSelect.php');
								}

		public function Eliminar()
								{
									$this->anuncio->Delete($_REQUEST['id']);

									$fichapuntero  	= $_REQUEST['ficid'];

									require_once('../views/anuncio/anuncioSelect.php');
								}

		public function Actualizar()
									{
										$datos = $this->anuncio;

										$datos->titulo 	= $_REQUEST['titulo'];
										$datos->descrp 	= $_REQUEST['descrp'];
										$datos->fchfin	= $_REQUEST['fchfin'];										
										$datos->id 		= $_REQUEST['id'];

										

 										$this->anuncio->Update($datos);

										 $fichapuntero  	= $_REQUEST['ficid'];

										 require_once('../views/anuncio/anuncioSelect.php');
										 
									}

	}

?>