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


		public function Insert(Anuncio $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_anuncio(`anu_titl`, `anu_descrp`, `anu_fechcr`, `anu_fechfn`, `anu_fichid`, `anu_usuid`)
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
									 							$sql="UPDATE tbl_anuncio SET anu_titl=?,anu_descrp=?,anu_fechcr=?,anu_fechfn=?,	anu_fichid=?,anu_usuid=? 

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




