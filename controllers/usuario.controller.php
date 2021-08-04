<?php

    require_once('../models/usuario.php');
	require_once('../models/ficha.php');
	require_once('../models/rol.php');
	require_once('../models/estado.php');
	require_once('../models/tipoidentificacion.php');

	class UsuarioController
	{	
		private $usuario;
		public  $rolpuntero;

		function __construct()	{	
									  $this->usuario= new Usuario();
									  $this->ficha = new Ficha();
									  $this->rol = new Rol();
									  $this->estado = new Estado();
									  $this->tipoidentificacion = new Tipoidentificacion();
							  	}

		public function Index()
								{   

									

									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');

									if($_SESSION['SRol']==1){

									require_once('../views/usuario/usuarioView.php');

									}else{

									echo "<script> window.location.replace('../views/main.php');</script>";

									}
									require_once('../views/frames/firtsfooter.php');
									require_once('../views/frames/footer.php'); 
									



									

								}


                                
		public function Insertar()
								{

									$datos= $this->usuario;

									$datos->id          = $_REQUEST['id'];
									$datos->nombre      = $_REQUEST['nombre'];
                                    $datos->apellido    = $_REQUEST['apellido'];
                                    $datos->contraseña  = $_REQUEST['contraseña'];
                                    $datos->correo      = $_REQUEST['correo'];
                                    $datos->rol         = $_REQUEST['rol'];
                                    $datos->estado      = $_REQUEST['estado'];
									$datos->identi      = $_REQUEST['identi'];
									
									$rolpuntero         = $_REQUEST['rol'];

									$respuesta = $this->usuario->Insert($datos);
									

									require_once('../views/usuario/usuarioSelect.php');
								}

		public function Eliminar()
								{

									$rolpuntero         = $_REQUEST['rol'];

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
                                        $datos->rol         = $_REQUEST['rol'];
                                        $datos->estado      = $_REQUEST['estado'];
                                        $datos->identi      = $_REQUEST['identi'];
										$datos->id          = $_REQUEST['id'];

										$update = $_REQUEST['valid'];

										$rolpuntero         = $_REQUEST['rol'];
    
 										$this->usuario->Update($datos,$update);

 										require_once('../views/usuario/usuarioSelect.php');
									}
									
		public function Seleccion()
									{	
										$datos = $this->usuario;
										
										$rolpuntero=$_REQUEST['rolid'];
										$this->usuario->Select($rolpuntero);

										require_once('../views/usuario/usuarioSelect.php');
										
									}
		public function Recargar()
									{	
										require_once('../views/usuario/usuarioConfirm.php');
									}
		public function Login($user,$pass)
									{
										
										return $this->usuario->Login($user,md5($pass));
									}

		public function Logout($id)
								{
									$this->usuario->Logout($id);
								}
								
		public function Eliminarficha()
									{
									
										$rolpuntero=$_SESSION['rolpuntero'];

										$this->usuario->DelectFicha($_REQUEST['usfid']);
										require_once('../views/usuario/usuarioSelect.php');
										
									}
		public function Agregarficha()
									{

										$rolpuntero=$_SESSION['rolpuntero'];
									
										$this->usuario->AddFicha($_REQUEST['ficha'],$_REQUEST['idusu']);
										require_once('../views/usuario/usuarioSelect.php');
										
									}

		public function Selectficha(){
										require_once('../views/usuario/usuarioModal.php');
		}



	}

?>