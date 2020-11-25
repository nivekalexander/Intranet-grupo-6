<?php

    require_once('../models/usuario.php');
   

	class UsuarioController
	{	
		private $usuario;

		function __construct()	{
							  		$this->usuario= new Usuario();
							  	}

		public function Index()
								{
									   
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									require_once('../views/usuario/usuarioView.php');
									require_once('../views/frames/firtsfooter.php');
									require_once('../views/frames/footer.php'); 
                                }

                                
		public function Insertar()
								{

									$datos= $this->usuario;

									$datos->nombre      = $_REQUEST['nombre'];
                                    $datos->apellido    = $_REQUEST['apellido'];
                                    $datos->contraseña  = $_REQUEST['contraseña'];
                                    $datos->correo      = $_REQUEST['correo'];
                                    $datos->ficha       = $_REQUEST['ficha'];
                                    $datos->rol         = $_REQUEST['rol'];
                                    $datos->estado      = $_REQUEST['estado'];
                                    $datos->identi      = $_REQUEST['identi'];

									$this->usuario->Insert($datos);

									require_once('../views/usuario/usuarioSelect.php');
								}

		public function Eliminar()
								{
									$this->usuario->Delete($_REQUEST['id']);
									require_once('../views/usuario/usuarioSelect.php');
								}

		public function Actualizar()
									{
                                        $datos = $this->usuario;
                                        
                                        $datos->nombre      = $_REQUEST['nombre'];
                                        $datos->apellido    = $_REQUEST['apellido'];
                                        $datos->contraseña  = $_REQUEST['contraseña'];
                                        $datos->correo      = $_REQUEST['correo'];
                                        $datos->ficha       = $_REQUEST['ficha'];
                                        $datos->rol         = $_REQUEST['rol'];
                                        $datos->estado      = $_REQUEST['estado'];
                                        $datos->identi      = $_REQUEST['identi'];
                                        $datos->id          = $_REQUEST['id'];
    
 										$this->usuario->Update($datos);

 										require_once('../views/usuario/usuarioSelect.php');
									}

	}

?>