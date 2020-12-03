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
																 INNER JOIN tbl_ficha 
																 INNER JOIN tbl_rol 
																 INNER JOIN tbl_estado 
																 INNER JOIN tbl_tipoid 
																 WHERE tbl_usuario.usu_ficcodigo = tbl_ficha.fic_codigo
																 AND tbl_usuario.usu_rolid = tbl_rol.rol_id 
																 AND tbl_usuario.usu_estid = tbl_estado.est_id 
																 AND tbl_usuario.usu_tipid = tbl_tipoid.tip_id
																 AND tbl_usuario.usu_rolid = ?
																 ORDER BY tbl_usuario.usu_numdnt DESC");
																 $sql->execute(array($rol));
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

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
									 							$sql="INSERT INTO tbl_usuario(usu_numdnt,usu_nombre,usu_aplldo,usu_passwd,usu_correo,usu_ficcodigo,usu_rolid ,usu_estid,usu_tipid)
																					 VALUES(?,?,?,?,?,?,?,?,?)";
																	
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->id,
                                                                                                $data->nombre,
                                                                                                $data->apellido,
                                                                                                $data->contraseña,
                                                                                                $data->correo,
                                                                                                $data->ficha,
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
									 							$sql="UPDATE tbl_usuario SET usu_numdnt = ?, usu_nombre = ?, usu_aplldo = ?, usu_passwd = ?, usu_correo = ?, usu_ficcodigo = ?, usu_rolid = ?, usu_estid = ?, usu_tipid = ? WHERE usu_numdnt = $update";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																						
                                                                                                $data->nombre,
                                                                                                $data->apellido,
                                                                                                $data->contraseña,
                                                                                                $data->correo,
                                                                                                $data->ficha,
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
															$sql=$this->pdo->prepare("CALL LOGIN(?,?)");
															$sql->execute(array($user,$pass));
															return $sql->fetch(PDO::FETCH_OBJ);
															}

									catch (Exception $e) { die($e->getMessage());			}
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
									 							$sql="UPDATE tbl_usuario SET usu_numdnt = ?, usu_nombre = ?, usu_aplldo = ?, usu_passwd = ?, usu_correo = ? WHERE usu_numdnt = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																						        $data->id,
                                                                                                $data->nombre,
                                                                                                $data->apellido,
                                                                                                $data->contraseña,
                                                                                                $data->correo,
                                                                
                                                                                                $data->id
      
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


}


?>