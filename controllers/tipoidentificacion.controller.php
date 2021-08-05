<?php

	require_once('../models/tipoIdentificacion.php');

	class TipoIdentificacionController
	{	
		private $tipoIdentificacion;

		function __construct()	{
							  		$this->tipoIdentificacion= new TipoIdentificacion(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
									
									require_once('../views/frames/navbar.php');
									
									require_once('../views/frames/slidebar.php');

									if($_SESSION['SRol']==1){

										require_once('../views/tipoidentificacion/tipoidentificacionView.php');
	
									}else{

										echo "<script> window.location.replace('../views/main.php');</script>";

									}
								
									
									require_once('../views/frames/firtsfooter.php');

									require_once('../views/frames/footer.php');
								}

		public function Insertar()
								{

									$data= $this->tipoIdentificacion;

									$data->tipo = $_REQUEST['tipo'];


									$this->tipoIdentificacion->Insert($data);

									require_once('../views/tipoidentificacion/tipoidentificacionSelect.php');
								}
        public function Actualizar()
            {

                $data= $this->tipoIdentificacion;

                $data->tipo=$_REQUEST['tipo'];
                $data->id=$_REQUEST['id'];

                $this->tipoIdentificacion->Update($data);

                require_once('../views/tipoidentificacion/tipoidentificacionSelect.php');


            }
    
        public function Eliminar()
        {

            $this->tipoIdentificacion->Delete($_REQUEST['id']);
            require_once('../views/tipoidentificacion/tipoidentificacionSelect.php');

        } 
            




    }
    
 

?>