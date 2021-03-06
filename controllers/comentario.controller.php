<?php

	require_once('../models/comentario.php');

	class ComentarioController
	{	
		private $comentario;

		function __Construct()	{
							  		$this->comentario = new Comentario();
							  	}

		public function Index()
								{	
                                    
									require_once('../views/comentario/comentarioView.php');
								}

		public function Insertar()
								{
									$datos= $this->comentario;

									$datos->respst 	= $_REQUEST['respst'];
									$datos->perprt 	= $_REQUEST['perprt'];
									$datos->usunumdnt 	= $_SESSION['SIdu'] ;
									if(isset($_REQUEST['comid'])){
										$datos->comid	= $_REQUEST['comid'];
										$this->comentario->InsertResp($datos);
									}else{
										$datos->forid = $_REQUEST['id'];
										$this->comentario->Insert($datos);
									}																		

									require_once('../views/comentario/comentarioSelect.php');
								}										

		public function Eliminar()
								{	
									if(isset($_REQUEST['resid'])){
										$this->comentario->DeleteResp($_REQUEST['resid']);
									}else{
										$this->comentario->Delete($_REQUEST['comid']);
									}										

									require_once('../views/comentario/comentarioSelect.php');
								}

		public function Actualizar()
									{
										$datos = $this->comentario;
										$datos->respst 	= $_REQUEST['respst'];
										
										if(isset($_REQUEST['resid'])){
											$datos->id = $_REQUEST['resid'];
											$this->comentario->UpdateResp($datos);
										}else{
											$datos->id = $_REQUEST['comid'];
											$this->comentario->Update($datos);
										}										

										require_once('../views/comentario/comentarioSelect.php');
										 
									}

	}

?>