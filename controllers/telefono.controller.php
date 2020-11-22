<?php

	require_once('../models/telefono.php');

	class TelefonoController
	{	
		private $telefono;

		function __construct()	{
							  		$this->telefono= new Telefono(); 		
							  	}

		public function Index()
								{
									require_once('../views/telefono/telefonoView.php');
								}

		public function Eliminar()
								{
									$this->telefono->Delete($_REQUEST['id']);
									require_once('../views/telefono/telefonoSelect.php');
								}
		public function Actualizar()
								{
									$datos = $this->telefono;
									
									$datos->numero 	= $_REQUEST['numero'];
									$datos->id 		= $_REQUEST['id'];

									$this->telefono->Update($datos);
									require_once('../views/telefono/telefonoSelect.php');

								}

		public function Insertar()
								{

									$datos = $this->telefono;

									$datos->numero = $_REQUEST['numero'];

									$this->telefono->Insert($datos);

									require_once('../views/telefono/telefonoSelect.php');
								}

	}

?>