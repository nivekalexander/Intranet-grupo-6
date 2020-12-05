<?php 


class Anuncio
	{
		private $pdo;

		public function __Construct()
									 {
									 	try  				 {	$this->pdo=Database::Conectar(); }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Select($fichapuntero)
									 {
									 	try  				 {
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_anuncio 
																						  INNER JOIN tbl_usuario 
																						  WHERE tbl_anuncio.anu_usunumdnt = tbl_usuario.usu_numdnt 
																						  AND tbl_anuncio.anu_ficcodigo = ? 
																						  ORDER BY tbl_anuncio.anu_id DESC");
									 							$sql->execute(array($fichapuntero));
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function SelectInstructor($fichapuntero,$idusuario)
									 {
									 	try  				 {
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_anuncio 
																						  INNER JOIN tbl_usuario 
																						  WHERE tbl_anuncio.anu_usunumdnt = tbl_usuario.usu_numdnt 
																						  AND tbl_anuncio.anu_ficcodigo = ? 
																						  AND  tbl_anuncio.anu_usunumdnt = ? 
																						  ORDER BY tbl_anuncio.anu_id DESC");
									 							$sql->execute(
																	 			array(
																					 $fichapuntero
																					 ,$idusuario
																					)
																			 );
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }						 


		public function Insert(Anuncio $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_anuncio(`anu_titulo`, `anu_descrp`, `anu_fecfn`, `anu_ficcodigo`, `anu_usunumdnt`)
																					 VALUES(?,?,?,?,?)";
																					 			 

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->titulo,
																								$data->descrp,
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
											$sql="UPDATE tbl_anuncio SET anu_titulo=?,anu_descrp=?,anu_fecfn=?  

																 WHERE anu_id=?";
																 
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
	
																							$data->titulo,
																							$data->descrp,
																							$data->fchfin,
																							
 																							$data->id

									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	}

?>




