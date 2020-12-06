<?php

	require_once('../models/tipooferta.php');

	class TipoofertaController
	{	
		private $tipooferta;

		function __construct()	{
							  		$this->tipooferta= new Tipooferta(); 		
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
									
									require_once('../views/frames/navbar.php');
									
									require_once('../views/frames/slidebar.php');

									if($_SESSION['SRol']==1){

										require_once('../views/tipooferta/tipoofertaView.php');
	
									}else{

										echo "<script> window.location.replace('../views/main.php');</script>";

									}


									require_once('../views/frames/firtsfooter.php');

									require_once('../views/frames/footer.php');
								}

		public function Eliminar()
								{
									$this->tipooferta->Delete($_REQUEST['id']);
									require_once('../views/tipooferta/tipoofertaSelect.php');
								}
		public function Actualizar()
								{
									$datos = $this->tipooferta;
									
									$datos->nombre 	= $_REQUEST['nombre'];
									$datos->id 		= $_REQUEST['id'];

									$this->tipooferta->Update($datos);
									require_once('../views/tipooferta/tipoofertaSelect.php');

								}

		public function Insertar()
								{

									$datos = $this->tipooferta;

									$datos->nombre = $_REQUEST['nombre'];

									$this->tipooferta->Insert($datos);

									require_once('../views/tipooferta/tipoofertaSelect.php');
								}

	}

?>