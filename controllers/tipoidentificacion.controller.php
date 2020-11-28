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


									require_once('../views/tipoIdentificacion/tipoIdentificacionView.php');
									

								}

		public function Insertar()
								{

									$data= $this->tipoIdentificacion;

									$data->tipo = $_REQUEST['tipo'];


									$this->tipoIdentificacion->Insert($data);

									require_once('../views/tipoIdentificacion/tipoIdentificacionSelect.php');
								}
        public function Actualizar()
            {

                $data= $this->tipoIdentificacion;

                $data->tipo=$_REQUEST['tipo'];
                $data->id=$_REQUEST['id'];

                $this->tipoIdentificacion->Update($data);

                require_once('../views/tipoIdentificacion/tipoIdentificacionSelect.php');


            }
    
        public function Eliminar()
        {

            $this->tipoIdentificacion->Delete($_REQUEST['id']);
            require_once('../views/tipoIdentificacion/tipoIdentificacionSelect.php');

        } 
            




    }
    
 

?>