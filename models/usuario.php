<?php


class Usuario
{
	private $pdo;


	public function __construct()
									 {
									 	try  				 {	$this->pdo=Database::Conectar(); }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Select()
									 {
									 	try  				 {
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_usuario  ORDER BY usu_id DESC");
									 							$sql->execute(
                                                                 );
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



}


?>