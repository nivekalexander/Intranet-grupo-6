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
								
                               
                                require_once('../views/grupos/gruposView.php');
							
                                }
                                
                            }
 ?>