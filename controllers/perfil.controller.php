<?php

require_once('../models/usuario.php');

class PerfilController
{	
    private $perfil;

    function __Construct()	{
                                $this->usuario= new Usuario();
                              }

    public function Index()
                            {
                                require_once('../views/frames/header.php');
                                require_once('../views/frames/navbar.php');
                                require_once('../views/frames/slidebar.php');
                                require_once('../views/perfil/perfilView.php');
                                require_once('../views/frames/firtsfooter.php');
                                require_once('../views/frames/footer.php');
                            }


    public function ActualizarPerfil()
									{
                                        $datos = $this->usuario;
                                        
                                        $datos->nombre      = $_REQUEST['nombre'];
                                        $datos->apellido    = $_REQUEST['apellido'];
                                        $datos->correo      = $_REQUEST['correo'];
                                        $datos->id          = $_REQUEST['id'];
                                        
    
 										$this->usuario->UpdateUser($datos);
                                        
                                         require_once('../views/perfil/perfilForm.php');
                                         
                                    }
    
public function ActualizarContraP()
									{
                                        $datos = $this->usuario;

                                        $datos->contraseña   = $_REQUEST['contraseña'];
                                        $datos->id           = $_REQUEST['id'];

                                        print($datos->contraseña);
    
 										$this->usuario->UpdatePassPerfil($datos);
                                        
                                         require_once('../views/perfil/perfilForm.php');
                                         
									}
}
?>