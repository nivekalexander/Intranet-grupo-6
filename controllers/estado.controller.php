<?php

	require_once('../models/estado.php');

	class EstadoController
	{	
		private $estado;

		function __construct()	{
							  		$this->estado= new Estado(); 		
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
									
									require_once('../views/frames/navbar.php');
									
									require_once('../views/frames/slidebar.php');

									require_once('../views/estado/estadoView.php');

									require_once('../views/frames/firtsfooter.php');

									require_once('../views/frames/footer.php');
								}

		public function Eliminar()
								{
									$this->estado->Delete($_REQUEST['id']);
									require_once('../views/estado/estadoSelect.php');
								}
		public function Actualizar()
								{
									$datos = $this->estado;
									
									$datos->nombre 	= $_REQUEST['nombre'];
									$datos->id 		= $_REQUEST['id'];

									$this->estado->Update($datos);
									require_once('../views/estado/estadoSelect.php');

								}

		public function Insertar()
								{

									$datos = $this->estado;

									$datos->nombre = $_REQUEST['nombre'];

									$this->estado->Insert($datos);

									require_once('../views/estado/estadoSelect.php');
								}

	}

?>