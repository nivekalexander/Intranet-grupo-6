<?php 
require_once('../models/rol.php');

class RolController{

	private $rol;

	public function __Construct()	{
							  		$this->rol= new Rol(); 		
		}

		public function Index()
								{
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									if($_SESSION['SRol']==1){

										require_once('../views/rol/rolView.php');
	
									}else{

										echo "<script> window.location.replace('../views/main.php');</script>";

									}
								
									
									require_once('../views/frames/footer.php');


									
								}

		public function Eliminar()
								{
									$this->rol->Delete($_REQUEST['id']);
									require_once('../views/rol/rolSelect.php');
								}

	    public function Insertar()
								{

									$datos= $this->rol;

									$datos->name = $_REQUEST['nombre'];

									$this->rol->Insert($datos);

									require_once('../views/rol/rolSelect.php');
								}
		public function Actualizar()
								{
									
									$datos= $this->rol;

									$datos->name = $_REQUEST['nombre'];
									$datos->id = $_REQUEST['id'];
									$this->rol->Update($datos);

									require_once('../views/rol/rolSelect.php');
								}


}
?>