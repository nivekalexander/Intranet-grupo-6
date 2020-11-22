<?php

	require_once('../models/persona.php');

	class PersonaController
	{	
		private $persona;

		function __construct()	{
							  		$this->persona = new Persona();
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
									
									require_once('../views/frames/navbar.php');
									
									require_once('../views/frames/slidebar.php');

									require_once('../views/persona/personaView.php');
									
									require_once('../views/frames/footer.php');
								}

		public function Insertar()
								{

									$datos= $this->persona;

									$datos->nombre 		= $_REQUEST['nombre'];
									$datos->apelliod	= $_REQUEST['apellido'];
									$datos->direcci 	= $_REQUEST['direccion'];
									$datos->correo 		= $_REQUEST['correo'];
									$datos->doc 		= $_REQUEST['documento'];
									$datos->num 		= $_REQUEST['numero'];


									$this->persona->Insert($datos);

									require_once('../views/persona/personaSelect.php');
								}

		public function Eliminar()
								{
									$this->persona->Delete($_REQUEST['id']);
									require_once('../views/persona/personaSelect.php');
								}

		public function Actualizar()
									{
										$datos = $this->persona;

										$datos->nombre 		= $_REQUEST['nombre'];
										$datos->apellido	= $_REQUEST['apellido'];
										$datos->direcci 	= $_REQUEST['direccion'];
										$datos->correo 		= $_REQUEST['correo'];
										$datos->num 		= $_REQUEST['numero'];
										$datos->doc 		= $_REQUEST['documento'];
 										$datos->id 			= $_REQUEST['id'];

 										$this->persona->Update($datos);
 										require_once('../views/persona/personaSelect.php');
									}

	}

?>