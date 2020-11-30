<?php

	require_once('../models/respuesta.php');

	class RespuestaController
	{	
		private $respuesta;

		function __Construct()	{
							  		$this->respuesta = new Respuesta();
							  	}

		public function Index()
								{	

									require_once('../views/respuesta/respuestaView.php');
								}							

		public function Insertar()
								{

									$datos= $this->respuesta;

									$datos->respst 	= $_REQUEST['respst'];
									$datos->perprt 	= $_REQUEST['perprt'];
									$datos->forid	= $_REQUEST['id'];																		

									$this->respuesta->Insert($datos);

									require_once('../views/respuesta/respuestaSelect.php');
								}

		public function Eliminar()
								{
									$this->respuesta->Delete($_REQUEST['comid']);

									require_once('../views/respuesta/respuestaSelect.php');
								}

		public function Actualizar()
									{
										$datos = $this->respuesta;

										$datos->respst 	= $_REQUEST['respst'];									
										$datos->id 		= $_REQUEST['comid'];
										
 										$this->respuesta->Update($datos);

										require_once('../views/respuesta/respuestaSelect.php');
										 
									}

	}

?>