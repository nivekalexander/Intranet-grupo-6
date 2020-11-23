<?php
class PerfilController
{	
    private $perfil;

    function __Construct()	{
                            
                              }

    public function Index()
                            {

                                require_once('../views/frames/header.php');
									
                                require_once('../views/frames/navbar.php');
                                
                                require_once('../views/frames/slidebar.php');
                                
                                require_once('../views/frames/firtsfooter.php');
                                require_once('../views/perfil/perfilView.php');


                                require_once('../views/frames/footer.php');
                            }
}
?>