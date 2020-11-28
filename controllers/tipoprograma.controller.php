<?php 
require_once('../models/tipoprograma.php');

class TipoprogramaController{

	private $tipoprograma;

	public function __Construct()	{
							  		$this->tipoprograma= new TipoPrograma(); 		
		}

		public function Index()
								{

									require_once('../views/tipoprograma/tipoprogramaView.php');


									
								}

		public function Eliminar()
								{
									$this->tipoprograma->Delete($_REQUEST['id']);
									require_once('../views/tipoprograma/tipoprogramaSelect.php');
								}

	    public function Insertar()
								{

									$datos= $this->tipoprograma;

									$datos->name = $_REQUEST['nombre'];

									$this->tipoprograma->Insert($datos);

									require_once('../views/tipoprograma/tipoprogramaSelect.php');
								}
		public function Actualizar()
								{
									
									$datos= $this->tipoprograma;

									$datos->name = $_REQUEST['nombre'];
									$datos->id = $_REQUEST['id'];
									$this->tipoprograma->Update($datos);

									require_once('../views/tipoprograma/tipoprogramaSelect.php');
								}


}
?>