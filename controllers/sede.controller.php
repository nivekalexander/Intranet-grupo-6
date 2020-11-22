<?php

	require_once('../models/sede.php');

	class SedeController
	{	
		private $sede;

		function __construct()	{
							  		$this->sede = new Sede(); 		
							  	}

		public function Index()
								{
									require_once('../views/sede/sedeView.php');
								}

		public function Eliminar()
								{
									$this->sede->Delete($_REQUEST['id']);
									require_once('../views/sede/sedeSelect.php');
								}
		public function Actualizar()
								{
									$datos = $this->sede;
									
									$datos->nombre 	= $_REQUEST['nombre'];
									$datos->ciudad 	= $_REQUEST['ciudad'];
									$datos->id 		= $_REQUEST['id'];

									$this->sede->Update($datos);
									require_once('../views/sede/sedeSelect.php');

								}

		public function Insertar()
								{

									$datos = $this->sede;

									$datos->nombre 	= $_REQUEST['nombre'];
									$datos->ciudad 	= $_REQUEST['ciudad'];

									$this->sede->Insert($datos);

									require_once('../views/sede/sedeSelect.php');
								}

	}

?>