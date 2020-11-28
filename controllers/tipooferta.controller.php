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


									require_once('../views/tipooferta/tipoofertaView.php');


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