<?php 
require_once('../models/fases.php');

class FasesController{

	private $fases;

	public function __Construct()	{
							  		$this->fases = new Fases(); 		
		}

		public function Index()
								{

									require_once('../views/fases/fasesView.php');



									
								}

		public function Eliminar()
								{
									$this->fases->Delete($_REQUEST['id']);
									require_once('../views/fases/fasesSelect.php');
								}

	    public function Insertar()
								{

									$datos= $this->fases;

									$datos->name = $_REQUEST['nombre'];

									$this->fases->Insert($datos);

									require_once('../views/fases/fasesSelect.php');
								}
		public function Actualizar()
								{
									
									$datos= $this->fases;

									$datos->name = $_REQUEST['nombre'];
									$datos->id = $_REQUEST['id'];
									$this->fases->Update($datos);

									require_once('../views/fases/fasesSelect.php');
								}


}
?>