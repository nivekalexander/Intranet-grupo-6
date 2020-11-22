<?php

	require_once('../models/tipoidentificacion.php');

	class TipoidentificacionController
	{	
		private $tipoidentificacion;

		function __Construct()	{
							  		$this->tipoidentificacion= new Tipoidentificacion(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
									
									require_once('../views/frames/navbar.php');
									
									require_once('../views/frames/slidebar.php');

									require_once('../views/tipoidentificacion/tipoidentificacionView.php');

									require_once('../views/frames/footer.php');
								}

		public function Insertar()
								{

									$data= $this->tipoidentificacion;

									$data->tipo 	= $_REQUEST['tipo'];


									$this->tipoidentificacion->Insert($data);

									require_once('../views/tipoidentificacion/tipoidentificacionSelect.php');
								}
        public function Actualizar()
            {

                $data= $this->tipoidentificacion;

                $data->tipo=$_REQUEST['tipo'];
                $data->id=$_REQUEST['id'];

                $this->tipoidentificacion->Update($data);

                require_once('../views/tipoidentificacion/tipoidentificacionSelect.php');


            }
    
        public function Eliminar()
        {

            $this->tipoidentificacion->Delete($_REQUEST['id']);
            require_once('../views/tipoidentificacion/tipoidentificacionSelect.php');

        } 
            




    }
    
 

?>