<?php

	require_once('../models/programaformacion.php');
	require_once('../models/estado.php');
	require_once('../models/tipoprograma.php');

	class ProgramaformacionController
	{	
		private $programaformacion;

		function __Construct()	{
									  $this->programaformacion= new ProgramaFormacion(); 
									  $this->estado= new Estado();
									  $this->tipoprograma= new TipoPrograma(); 

							  	}

		public function Index()
								{
									   
									require_once('../views/programaformacion/programaformacionView.php');

								}

		public function Insertar()
								{

									$datos= $this->programaformacion;

									$datos->version 	    = $_REQUEST['version'];
									$datos->duracion 	    = $_REQUEST['duracion'];
									$datos->abreviacion	    = $_REQUEST['abreviacion'];
									$datos->nombre 	        = $_REQUEST['nombre'];
                                    $datos->estado          = $_REQUEST['estado'];
                                    $datos->tipoprograma    = $_REQUEST['tipoprograma'];
                                    

									$this->programaformacion->Insert($datos);

									require_once('../views/programaformacion/programaformacionSelect.php');
								}

		public function Eliminar()
								{
									$this->programaformacion->Delete($_REQUEST['id']);
									require_once('../views/programaformacion/programaformacionSelect.php');
								}

		public function Actualizar()
									{
										$datos = $this->programaformacion;

										$datos->version 	    = $_REQUEST['version'];
									    $datos->duracion 	    = $_REQUEST['duracion'];
									    $datos->abreviacion	    = $_REQUEST['abreviacion'];
									    $datos->nombre 	        = $_REQUEST['nombre'];
                                        $datos->estado          = $_REQUEST['estado'];
                                        $datos->tipoprograma    = $_REQUEST['tipoprograma'];
 										$datos->id 		        = $_REQUEST['id'];

 										$this->programaformacion->Update($datos);

 										require_once('../views/programaformacion/programaformacionSelect.php');
									}

	}

?>