<?php

	session_start();
	require_once('../models/database.php');
	require_once('./usuario.controller.php');

	?>

	<link rel="stylesheet" href="../assets/css/jquery-confirm.css"/>
 	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-confirm.js"></script>


	<?php

	if( ISSET($_POST['usur']) && ISSET($_POST['pass']))
	{
			$user=filter_input(INPUT_POST,'usur',FILTER_SANITIZE_SPECIAL_CHARS);
			$pass=filter_input(INPUT_POST,'pass',FILTER_SANITIZE_SPECIAL_CHARS);
			
			if(ISSET($user) && ISSET($pass))
			{
					$objUser=new UsuarioController();
					$respuesta=$objUser->Login($user,$pass);
					
					if (isset($respuesta->User) and $respuesta->Login=="NO")
					{
							
						echo "<script>
								$.confirm({
										   	title: 'CERRAR SESION',
										    content: 'Limite de Sessiones por Ficha Alcanzada.',
										    autoClose: 'logoutUser|5000',
										    buttons: {
												        logoutUser: {
														            text: 'Cerrando',
														            action: function () {
														               						window.location.href = ('../views/logout.php');
														            					}
												        			}
										    		 }
										});
						      </script>";


					}
					elseif(isset($respuesta->User) and $respuesta->Login=="SI")
					{
								
							$_SESSION['name'] = $respuesta->Name;
							$_SESSION['last'] = $respuesta->Lastname;
							$_SESSION['pass'] = $respuesta->Passw;
							$_SESSION['SUsu'] = $respuesta->User;
							$_SESSION['SRol'] = $respuesta->Rol;
							$_SESSION['SFic'] = $respuesta->Ficha;
							$_SESSION['SLog'] = $respuesta->Login;
                            $_SESSION['SIdu'] = $respuesta->Idusu;							
                           
							header('Location: ../views/main.php');

					}
					else
					{
						echo "NO SE PUEDE POR CREDENCIALES ERRADAS";
						header("Location: ./main.cerrar.php");
						exit();
					}
		
			}
			else
			{
				echo "VARIABLES VACIAS";
				header("Location: ./main.cerrar.php");
				exit();
			}
	}
	else
	{
		echo "FORMULARIO VACIO";
		header("Location: ./main.cerrar.php");
		exit();
	}
?>