<?php  
	require_once('../models/grupos.php');

	class GruposController{

		private $grupos;

		function __Construct() 
								{
									$this->grupos=new Grupos();
								}

		public function Index()
								{
								
                                require_once('../views/frames/header.php');
                                require_once('../views/frames/navbar.php');
								require_once('../views/frames/slidebar.php');
								if($_SESSION['SRol']!=3){

									require_once('../views/grupos/gruposView.php');

								}else{

									require_once('../views/usuario/noticiaView.php');

								}
                                
								require_once('../views/frames/firtsfooter.php');
                                require_once('../views/frames/footer.php');
                                }
                                
                            }
 ?>