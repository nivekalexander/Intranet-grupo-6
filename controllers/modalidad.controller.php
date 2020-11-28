<?php 
require_once('../models/modalidad.php');

class ModalidadController{

	private $modalidad;

	public function __Construct()	{
							  		$this->modalidad = new Modalidad(); 		
		}

		public function Index()
								{

									require_once('../views/modalidad/modalidadView.php');
											
								}

		public function Eliminar()
								{
									$this->modalidad->Delete($_REQUEST['id']);
									require_once('../views/modalidad/modalidadSelect.php');
								}

	    public function Insertar()
								{

									$datos= $this->modalidad;

									$datos->name = $_REQUEST['nombre'];

									$this->modalidad->Insert($datos);

									require_once('../views/modalidad/modalidadSelect.php');
								}
		public function Actualizar()
								{
									
									$datos= $this->modalidad;

									$datos->name = $_REQUEST['nombre'];
									$datos->id = $_REQUEST['id'];
									$this->modalidad->Update($datos);

									require_once('../views/modalidad/modalidadSelect.php');
								}


}
?>