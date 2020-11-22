<?php

	require_once('../models/ciudad.php');

	class CiudadController
	{	
		private $ciudad;

		function __construct()	{
							  		$this->ciudad = new Ciudad(); 		
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									require_once('../views/ciudad/ciudadView.php');
									require_once('../views/frames/footer.php');
									
									
								}

		public function Eliminar()
								{
									$this->ciudad->Delete($_REQUEST['id']);
									require_once('../views/ciudad/ciudadSelect.php');
								}
		public function Actualizar()
								{
									$datos = $this->ciudad;
									
									$datos->nombre 			= $_REQUEST['nombre'];
									$datos->departament 	= $_REQUEST['departament'];
									$datos->id 				= $_REQUEST['id'];

									$this->ciudad->Update($datos);
									require_once('../views/ciudad/ciudadSelect.php');

								}

		public function Insertar()
								{

									$datos = $this->ciudad;

									$datos->nombre 			= $_REQUEST['nombre'];
									$datos->departament 	= $_REQUEST['departament'];

									$this->ciudad->Insert($datos);

									require_once('../views/ciudad/ciudadSelect.php');
								}

	}

?>