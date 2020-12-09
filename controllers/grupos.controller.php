<?php  
	require_once('../models/grupos.php');
	require_once('../models/programaformacion.php');

	class GruposController{

		private $grupos;

		function __Construct() 
								{
									$this->grupos=new Grupos();
									$this->programaformacion=new ProgramaFormacion();

								}

		public function Index()
								{
								
                                require_once('../views/frames/header.php');
                                require_once('../views/frames/navbar.php');
								require_once('../views/frames/slidebar.php');
								if($_SESSION['SRol']!=3){

									require_once('../views/grupos/gruposView.php');

								}else{

									echo "<script> window.location.replace('../views/main.php');</script>";

								}
                                
								require_once('../views/frames/firtsfooter.php');
                                require_once('../views/frames/footer.php');
                                }
                                
							
	public function Buscar(){
		error_reporting(E_ALL ^ E_NOTICE);

		$idbuscar=$_REQUEST['id'];

		require_once('../views/grupos/gruposSelect.php');

	}
	}
 ?>