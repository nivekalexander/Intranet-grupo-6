
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

	public function Eliminar()
							{
								$this->login->Delete($_REQUEST['id']);
								require_once('../views/login/loginSelect.php');
							}

	public function Insertar()
							{

								$datos= $this->login;

								$datos->usuid 		= $_REQUEST['usuid'];
								$datos->ficid 		= $_REQUEST['ficid'];

								$this->login->Insert($datos);

								require_once('../views/login/loginSelect.php');
							}

}

?>