<?php 
require_once('../models/tipojornada.php');

class TipojornadaController{

	private $tipojornada;

	public function __Construct()	{
							  		$this->tipojornada= new TipoJornada(); 		
		}

		public function Index()
								{

									require_once('../views/tipojornada/tipojornadaView.php');

									
								}

		public function Eliminar()
								{
									$this->tipojornada->Delete($_REQUEST['id']);
									require_once('../views/tipojornada/tipojornadaSelect.php');
								}

	    public function Insertar()
								{

									$datos= $this->tipojornada;

									$datos->name = $_REQUEST['nombre'];

									$this->tipojornada->Insert($datos);

									require_once('../views/tipojornada/tipojornadaSelect.php');
								}
		public function Actualizar()
								{
									
									$datos= $this->tipojornada;

									$datos->name = $_REQUEST['nombre'];
									$datos->id = $_REQUEST['id'];
									$this->tipojornada->Update($datos);

									require_once('../views/tipojornada/tipojornadaSelect.php');
								}


}
?>