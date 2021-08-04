<?php


class Usuario
{
	private $pdo;


	public function __construct()
									 {
									 	try  				 {	$this->pdo=Database::Conectar(); }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Select($rol)
								{
								try  				 {
														$sql=$this->pdo->prepare("SELECT * FROM tbl_usuario 
															
															INNER JOIN tbl_rol 
															INNER JOIN tbl_estado 
															INNER JOIN tbl_tipoid 
															WHERE tbl_usuario.usu_rolid = tbl_rol.rol_id 
															AND tbl_usuario.usu_estid = tbl_estado.est_id 
															AND tbl_usuario.usu_tipid = tbl_tipoid.tip_id
															AND tbl_usuario.usu_rolid = ?
															ORDER BY tbl_usuario.usu_numdnt DESC");
															$sql->execute(array($rol));
														return $sql->fetchALL(PDO::FETCH_OBJ);
														}
								catch (Exception $e) {	die($e->getMessage());			 }
								}

//codigos para la ficha  pertenecientes al usuario



	public function SelectFichaUsu	($idusuario)
								{
								try  				 {
														$sql=$this->pdo->prepare("SELECT * FROM tbl_usuario_ficha
															WHERE usf_usunumdnt=?
															ORDER BY usf_id DESC");
															$sql->execute(array($idusuario));
														return $sql->fetchALL(PDO::FETCH_OBJ);
														}
								catch (Exception $e) {	die($e->getMessage());			 }
								}	

	public function SelectFichaAll	()
	{
								try  				 {
														$sql=$this->pdo->prepare("SELECT fic_codigo FROM tbl_ficha
															ORDER BY fic_codigo DESC");
															$sql->execute();
														return $sql->fetchALL(PDO::FETCH_OBJ);
														}
								catch (Exception $e) {	die($e->getMessage());			 }
	}	

	public function SelectFichaNoUsu($idusuario)
	{
								try  				 {
														$sql=$this->pdo->prepare("SELECT fic_codigo
																			FROM tbl_ficha
																			WHERE fic_codigo NOT IN (SELECT usf_ficcodigo
																							FROM tbl_usuario_ficha
																							WHERE usf_usunumdnt = ?)");
															$sql->execute(array($idusuario));
														return $sql->fetchALL(PDO::FETCH_OBJ);
														}
								catch (Exception $e) {	die($e->getMessage());			 }
	}

	public function DelectFicha($usfid)
								{
								try  				 {
														$sql="DELETE FROM tbl_usuario_ficha 
														WHERE usf_id=?";
														$this->pdo->prepare($sql)
																	->execute(array($usfid));
														}
								catch (Exception $e) {	die($e->getMessage());			 }
								}
	public function AddFicha($idficha,$idusu)
								{

								try {

																	   
																 $sql="INSERT INTO tbl_usuario_ficha (usf_usunumdnt,usf_ficcodigo) 
																 	   VALUES (?, ?)";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																							
																						$idusu,
																						$idficha
																						
                                                                                               
									 									  			 	   )
									 									  			);
									 	}
									 	catch (Exception $e) {	die($e->getMessage());			 }
								
								}
	



//fin de codigos para la ficha  pertenecientes al usuario


	public function SelectPerfil($id)
							 {
							 	try  				 {
							 							$sql=$this->pdo->prepare("SELECT * FROM tbl_usuario WHERE usu_numdnt = ?");
														 $sql->execute(array($id));
							 							return $sql->fetchALL(PDO::FETCH_OBJ);
							 						 }
							 	catch (Exception $e) {	die($e->getMessage());			 }
							 }

	public function Insert(Usuario $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_usuario(usu_numdnt,usu_nombre,usu_aplldo,usu_passwd,usu_correo,usu_rolid ,usu_estid,usu_tipid)
																					 VALUES(?,?,?,?,?,?,?,?)";
																	
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->id,
                                                                                                $data->nombre,
                                                                                                $data->apellido,
                                                                                                md5($data->contraseña),
                                                                                                $data->correo,
                                                                                                $data->rol,
                                                                                                $data->estado,
                                                                                                $data->identi
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (PDOException $e) {	
											$usuExist = $e->getCode();
											if($usuExist == 23000){
												return "El usuario ya existe";
											}else{
												die($e->getMessage());
											}
																						
										 }
									 }

    public function Update(Usuario $data,$update)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_usuario SET usu_numdnt = ?, usu_nombre = ?, usu_aplldo = ?, usu_passwd = ?, usu_correo = ?, usu_rolid = ?, usu_estid = ?, usu_tipid = ? WHERE usu_numdnt = $update";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																						        $data->id,
                                                                                                $data->nombre,
                                                                                                $data->apellido,
                                                                                                md5($data->contraseña),
                                                                                                $data->correo,
                                                                                                $data->rol,
                                                                                                $data->estado,
                                                                                                $data->identi
                                                                                               
      
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_usuario WHERE usu_numdnt=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	public function Get($id)
								{
								try  				 {
														$sql=$this->pdo->prepare("SELECT * FROM tbl_usuario
																				  WHERE tbl_usuario.usu_numdnt = ?
																				");
															$sql->execute(array($id));
														return $sql->fetchALL(PDO::FETCH_OBJ);
														}
								catch (Exception $e) {	die($e->getMessage());			 }
								}
								

	public function Login($user,$pass)
	{
		try 				 { 
								
								$datos= new Usuario;

								$sql=$this->pdo->prepare("SELECT 
								tbl_usuario.usu_correo , tbl_usuario.usu_rolid , 
								tbl_usuario_ficha.usf_ficcodigo , tbl_usuario.usu_numdnt,
								tbl_ficha.fic_codigo , tbl_usuario.usu_nombre , 
								tbl_usuario.usu_aplldo , tbl_usuario.usu_passwd 
								FROM tbl_usuario_ficha 
								INNER JOIN tbl_ficha on tbl_ficha.fic_codigo = tbl_usuario_ficha.usf_ficcodigo
								INNER JOIN tbl_usuario 
								WHERE tbl_usuario_ficha.usf_usunumdnt = tbl_usuario.usu_numdnt 
								AND tbl_usuario_ficha.usf_ficcodigo = tbl_ficha.fic_codigo 
								AND tbl_usuario.usu_correo=?
								AND tbl_usuario.usu_passwd=? LIMIT 1;");

								$sql->execute(array(
									$user,
									$pass
								));

								$result =$sql->fetch(PDO::FETCH_ASSOC);

								$datos->Name=$result['usu_nombre'];
								$datos->Lastname=$result['usu_aplldo'];
								$datos->Passw=$result['usu_passwd'];
								$datos->User=$result['usu_correo'];
								$datos->Rol=(int)$result['usu_rolid'];
								$datos->Ficha=$result['usf_ficcodigo'];
								$datos->idFicha=$result['fic_codigo'];
								$datos->Idusu=$result['usu_numdnt'];

								$datos->Login=$result['usu_nombre'];
								
								
								//contar cantidad de secciones 

								

								$sql2=$this->pdo->prepare("SELECT COUNT(log_id) 
								FROM tbl_login 
								WHERE log_usfficcodigo=?"); 	
								$sql2->execute(array($datos->idFicha));
								$result2 =$sql2->fetch(PDO::FETCH_ASSOC);
								$contSe= (int)$result2["COUNT(log_id)"];
								
								if ($datos->Rol == 3 ) {
				
									if ($contSe>-1 && $contSe<6) {
										
										$sql3=$this->pdo->prepare("INSERT INTO tbl_login 
										(log_usunumdnt,log_usfficcodigo) 
										values (?,?);"); 	
										$sql3->execute(array($datos->Idusu,$datos->idFicha));
										
										$datos->Login="SI";
										
									}else{
										$datos->Login="NO";
									}
								}else{

									$sql3=$this->pdo->prepare("INSERT INTO tbl_login 
									(log_usunumdnt,log_usfficcodigo) 
									values (?,?);"); 	
									$sql3->execute(array($datos->Idusu,$datos->idFicha));
									
									$datos->Login="SI";
								}
								
								
								
								
								return $datos;
								
								}

		catch (Exception $e) { }
	}

	public function Logout($id)
								{
									try 				 { 
															$sql=$this->pdo->prepare("DELETE FROM tbl_login WHERE log_usunumdnt = ?;");
															$sql->execute(array($id));
														 }

									catch (Exception $e) { die($e->getMessage());			}
								}


    public function UpdateUser(Usuario $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_usuario SET usu_numdnt = ?, usu_nombre = ?, usu_aplldo = ?, usu_correo = ? WHERE usu_numdnt = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																						        $data->id,
                                                                                                $data->nombre,
                                                                                                $data->apellido,
                                                                                                $data->correo,
                                                                
                                                                                                $data->id
      
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

 	public function UpdatePassPerfil(Usuario $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_usuario SET usu_passwd = ?  WHERE usu_numdnt = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																							md5($data->contraseña),
																								$data->id
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


}


?>