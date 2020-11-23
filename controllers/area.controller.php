<?php

	require_once('../models/area.php');

	class AreaController
	{	
		private $area;

		function __construct()	{
							  		$this->area = new Area(); 		
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									require_once('../views/area/areaView.php');
									require_once('../views/frames/footer.php');
									
									
								}

		public function Eliminar()
								{
									$this->area->Delete($_REQUEST['id']);
									require_once('../views/area/areaSelect.php');
								}
		public function Actualizar()
								{
									$datos = $this->area;
									
									$datos->nombre 	= $_REQUEST['nombre'];
									$datos->sede 	= $_REQUEST['sede'];
									$datos->id 		= $_REQUEST['id'];

									$this->area->Update($datos);
									require_once('../views/area/areaSelect.php');

								}

		public function Insertar()
								{

									$datos = $this->area;

									$datos->nombre 	= $_REQUEST['nombre'];
									$datos->sede 	= $_REQUEST['sede'];

									$this->area->Insert($datos);

									require_once('../views/area/areaSelect.php');
								}

	}

?>