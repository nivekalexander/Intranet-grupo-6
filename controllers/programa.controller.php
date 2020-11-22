<?php 
require_once('../models/programa.php');

class ProgramaController{

	private $programa;

	public function __Construct()	{
							  		$this->programa= new Programa(); 		
		}

		public function Index()
								{
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									require_once('../views/programa/programaView.php');
									require_once('../views/frames/footer.php');


									
								}

		public function Eliminar()
								{
									$this->programa->Delete($_REQUEST['id']);
									require_once('../views/programa/programaSelect.php');
								}

	    public function Insertar()
								{

									$datos= $this->programa;

									$datos->name = $_REQUEST['nombre'];

									$this->programa->Insert($datos);

									require_once('../views/programa/programaSelect.php');
								}
		public function Actualizar()
								{
									
									$datos= $this->programa;

									$datos->name = $_REQUEST['nombre'];
									$datos->id = $_REQUEST['id'];
									$this->programa->Update($datos);

									require_once('../views/programa/programaSelect.php');
								}


}
?>