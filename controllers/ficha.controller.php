<?php

	require_once('../models/ficha.php');
	require_once('../models/tipojornada.php');
	require_once('../models/modalidad.php');
	require_once('../models/tipooferta.php');
	require_once('../models/programaformacion.php');
	class FichaController
	{	
		private $ficha;
		private $tipojornada;
		private $tipomodalidad;
		private $tipooferta;
		private $programaformacion;
		function __construct()	{
									  $this->ficha= new Ficha(); 	
									  $this->tipojornada= new TipoJornada(); 	
									  $this->tipomodalidad= new Modalidad(); 	
									  $this->tipooferta= new TipoOferta();
									  $this->programaformacion= new ProgramaFormacion();  		
							  	}

		public function Index()
								{


									require_once('../views/ficha/fichaView.php');


								}

		public function Eliminar()
								{
									$this->ficha->Delete($_REQUEST['fic_id']);
									require_once('../views/ficha/fichaSelect.php');
								}
		public function Actualizar()
								{//fic_id,fic_codigo,fic_feccrn,fic_fecfn,fic_tijid,fic_modid,fic_tofid,fic_pfoid
									$datos = $this->ficha;
									
                                    $datos->fic_codigo 	= $_REQUEST['fic_codigo'];
                                    $datos->fic_feccrn 	= $_REQUEST['fic_feccrn'];
                                    $datos->fic_fecfn 	= $_REQUEST['fic_fecfn'];
                                    $datos->fic_tijid 	= $_REQUEST['fic_tijid'];
                                    $datos->fic_modid 	= $_REQUEST['fic_modid'];
                                    $datos->fic_tofid 	= $_REQUEST['fic_tofid'];
                                    $datos->fic_pfoid 	= $_REQUEST['fic_pfoid'];

									$datos->fic_id 		= $_REQUEST['fic_id'];

									$this->ficha->Update($datos);
									require_once('../views/ficha/fichaSelect.php');

								}

		public function Insertar()
								{

									$datos = $this->ficha;

									$datos->fic_codigo 	= $_REQUEST['fic_codigo'];
                                    $datos->fic_feccrn 	= $_REQUEST['fic_feccrn'];
                                    $datos->fic_fecfn 	= $_REQUEST['fic_fecfn'];
                                    $datos->fic_tijid 	= $_REQUEST['fic_tijid'];
                                    $datos->fic_modid 	= $_REQUEST['fic_modid'];
                                    $datos->fic_tofid 	= $_REQUEST['fic_tofid'];
                                    $datos->fic_pfoid 	= $_REQUEST['fic_pfoid'];

									$this->ficha->Insert($datos);

									require_once('../views/ficha/fichaSelect.php');
								}

	}

?>