<?php

	require_once('../models/departamento.php');

	class DepartamentoController
	{	
		private $departamento;

		function __construct()	{
							  		$this->departamento = new Departamento(); 		
							  	}

		public function Index()
								{
									require_once('../views/departamento/departamentoView.php');
								}

		public function Eliminar()
								{
									$this->departamento->Delete($_REQUEST['id']);
									require_once('../views/departamento/departamentoSelect.php');
								}
		public function Actualizar()
								{
									$datos = $this->departamento;
									
									$datos->nombre 	= $_REQUEST['nombre'];
									$datos->paisid 	= $_REQUEST['paisid'];
									$datos->id 		= $_REQUEST['id'];

									$this->departamento->Update($datos);
									require_once('../views/departamento/departamentoSelect.php');

								}

		public function Insertar()
								{

									$datos = $this->departamento;

									$datos->nombre = $_REQUEST['nombre'];
									$datos->paisid = $_REQUEST['paisid'];

									$this->departamento->Insert($datos);

									require_once('../views/departamento/departamentoSelect.php');
								}

	}

?>