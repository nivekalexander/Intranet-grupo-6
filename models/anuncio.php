<?php 


class Anuncio
	{
		private $pdo;

		public function __Construct()
									 {
									 	try  				 {	$this->pdo=Database::Conectar(); }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Select()
									 {
									 	try  				 {
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_anuncio ORDER BY anu_id DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		
		public function NameUsu()
		{
			try  				 {
									$sql=$this->pdo->prepare("SELECT tbl_usuario.usu_nombre, tbl_usuario.usu_aplldo FROM tbl_anuncio INNER JOIN tbl_usuario WHERE tbl_usuario.usu_id = tbl_anuncio.anu_id");
									$sql->execute();
									return $sql->fetchALL(PDO::FETCH_OBJ);
								 }
			catch (Exception $e) {	die($e->getMessage());			 }
		}
									 


		public function Insert(Anuncio $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_anuncio(`anu_titulo`, `anu_descrp`, `anu_feccrn`, `anu_fecfn`, `anu_ficid`, `anu_usuid`)
																					 VALUES(?,?,?,?,?,?)";
																					 			 

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->titulo,
																								$data->descrp,
																								$data->fchcre,
																								$data->fchfin,
																								$data->ficid,
																								$data->usuid
																							)
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_anuncio WHERE anu_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Update(Anuncio $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_anuncio SET anu_titulo=?,anu_descrp=?,anu_feccrn=?,anu_fecfn=?,anu_ficid=?,anu_usuid=? 

									 							WHERE anu_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
	
																							$data->titulo,
																							$data->descrp,
																							$data->fchcre,
																							$data->fchfin,
																							$data->ficid,
																							$data->usuid,
 																							$data->id

									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	}

?>




