<?php

	require_once('../models/comentario.php');

	class ComentarioController
	{	
		private $comentario;

		function __Construct()	{
							  		$this->comentario = new Comentario(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{	
                                    $fichapuntero  	= $_REQUEST['ficid'];
									require_once('../views/comentario/comentarioView.php');
								}

		public function Insertar()
								{

									$datos= $this->comentario;

									$datos->respst 	= $_REQUEST['respst'];
									$datos->perprt 	= $_REQUEST['perprt'];
									$datos->forid	= $_REQUEST['id'];																		

									$this->comentario->Insert($datos);

									require_once('../views/comentario/comentarioSelect.php');
								}

		public function Eliminar()
								{
									$this->comentario->Delete($_REQUEST['id']);

									$fichapuntero  	= $_REQUEST['ficid'];

									require_once('../views/comentario/comentarioSelect.php');
								}

		public function Actualizar()
									{
										$datos = $this->comentario;

										$datos->titulo 	= $_REQUEST['titulo'];
										$datos->descrp 	= $_REQUEST['descrp'];
										$datos->fchfin	= $_REQUEST['fchfin'];										
										$datos->id 		= $_REQUEST['id'];

										

 										$this->comentario->Update($datos);

										 $fichapuntero  	= $_REQUEST['ficid'];

										 require_once('../views/comentario/comentarioSelect.php');
										 
									}

	}

?>