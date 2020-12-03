<?php  
	require_once('../models/foro.php');

	class ForoController{

		private $foro;

		function __Construct() 
								{
									$this->foro = new Foro();
								}

		public function Index()
								{
                                
                                require_once('../views/frames/header.php');
                                
                                require_once('../views/frames/navbar.php');
                                
                                require_once('../views/frames/slidebar.php');

                                require_once('../views/foro/foroView.php');
								
								require_once('../views/frames/firtsfooter.php');

                                require_once('../views/frames/footer.php');
								}

		
		public function Insertar(){

								$datos = $this->foro;

								$datos->for_titulo = $_REQUEST['titulo'];
								$datos->for_fchfin = $_REQUEST['fchfin'];
								
								$datos->for_descrp = $_REQUEST['descrp'];
								$datos->for_ficid = $_REQUEST['ficid'];
								$datos->for_usunumdnt = $_REQUEST['idusu'];
								
								
								$this->foro->Insert($datos);
								require_once('../views/foro/foroSelect.php');
								}

		public function Eliminar(){

								$this->foro->Delete($_REQUEST['id']);
								$fichapuntero = $_REQUEST['ficid'];

								require_once('../views/foro/foroSelect.php');

								}

		public function Actualizar(){

								$datos=$this->foro;
	
								$datos->for_id = $_REQUEST['id'];
								$datos->for_titulo = $_REQUEST['titulo'];
								$datos->for_fchfin = $_REQUEST['fchfin'];
								
								$datos->for_descrp = $_REQUEST['descrp'];

																								
	
								$this->foro->Update($datos);
								require_once('../views/foro/foroSelect.php');
								}			
	}

 ?>