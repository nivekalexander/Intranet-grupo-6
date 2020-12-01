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
																 WHERE tbl_usuario.usu_ficid = tbl_ficha.fic_id 
																 AND tbl_usuario.usu_rolid = tbl_rol.rol_id 
																 AND tbl_usuario.usu_estid = tbl_estado.est_id 
																 AND tbl_usuario.usu_tipid = tbl_tipoid.tip_id
																 AND tbl_usuario.usu_rolid = ?
																 ORDER BY tbl_usuario.usu_id DESC");
																 $sql->execute(array($rol));
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Insert(Usuario $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_usuario(usu_nombre,usu_aplldo,usu_passwd,usu_correo, usu_ficid,usu_rolid ,usu_estid,usu_tipid)
									 										        VALUES(?,?,?,?,?,?,?,?)";
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

    public function Update(Usuario $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_usuario SET usu_nombre = ?, usu_aplldo = ?, usu_passwd = ?, usu_correo = ?, usu_ficid = ?, usu_rolid = ?, usu_estid = ?, usu_tipid = ? WHERE usu_id = ?";
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
                                                                                                $data->identi,
                                                                                                $data->id
      
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_usuario WHERE usu_id=?";
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


}


?>