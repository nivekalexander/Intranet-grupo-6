<?php

	require_once('../models/pais.php');

	class PaisController
	{	
		private $pais;

		function __construct()	{
							  		$this->pais = new Pais(); 		
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									require_once('../views/pais/paisView.php');
									require_once('../views/frames/firtsfooter.php');
									require_once('../views/frames/footer.php');
									
									
								}

		public function Eliminar()
								{
									$this->pais->Delete($_REQUEST['id']);
									require_once('../views/pais/paisSelect.php');
								}
		public function Actualizar()
								{
									$datos = $this->pais;
									
									$datos->nombre 	= $_REQUEST['nombre'];
									$datos->postal 	= $_REQUEST['postal'];
									$datos->id 		= $_REQUEST['id'];

									$this->pais->Update($datos);
									require_once('../views/pais/paisSelect.php');

								}

		public function Insertar()
								{

									$datos = $this->pais;

									$datos->nombre = $_REQUEST['nombre'];
									$datos->postal = $_REQUEST['postal'];

									$this->pais->Insert($datos);

									require_once('../views/pais/paisSelect.php');
								}

	}

?>