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
                                
                                require_once('../views/foro/foroView.php');

								}



		public function Crearforo()
		{
			require_once('../views/foro/foroInsert.php');

		}
		public function Cancelarcrearforo()
		{
			require_once('../views/foro/foroSelect.php');

			
		}
		public function EditarAntes()
		{

			require_once('../views/foro/foroInsert.php');
			require_once('../views/foro/foroSelect.php');

			
		}

		
		public function Insertar(){

								$datos = $this->foro;

								$datos->for_titulo = $_REQUEST['titulo'];
								$datos->for_fchfin = $_REQUEST['fchfin'];
								$datos->for_fchini = $_REQUEST['fhcini'];
								$datos->for_descrp = $_REQUEST['descrp'];
								$datos->for_ficid = $_REQUEST['ficid'];
								
								$this->foro->Insert($datos);
								require_once('../views/foro/foroSelect.php');
								}

		public function Eliminar(){

								$this->foro->Delete($_REQUEST['id']);
								require_once('../views/foro/foroSelect.php');

								}

		public function Actualizar(){

								$datos=$this->foro;
	
								$datos->foro_id=$_REQUEST['foro_id'];
								$datos->foro_titulo=$_REQUEST['foro_titulo'];
								$datos->foro_mensaje=$_REQUEST['foro_mensaje'];
								$datos->foro_fecha_inicio=$_REQUEST['foro_fecha_inicio'];
								$datos->foro_fecha_fin=$_REQUEST['foro_fecha_fin'];
																	
								//,nombres,area,clave, estado
	
								$this->foro->Update($datos);
								require_once('../views/foro/foroSelect.php');
								}			
	}

 ?>