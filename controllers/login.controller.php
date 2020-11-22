<?php

	require_once('../models/login.php');

	class LoginController
	{	
		private $login;

		function __Construct()	{
							  		$this->login= new Login(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{ 
									require_once('../views/frames/header.php');
									
                                    require_once('../views/login/loginView.php');
                                    
									require_once('../views/frames/footer.php');
								}


    }
?>