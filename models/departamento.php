<?php 


class Departamento
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_departamento ORDER BY dep_id DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


		public function Insert(Departamento $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_departamento(`dep_nombre`, `dep_paiid`)
									 										        VALUES(?,?)";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->nombre,
																								$data->paisid
																								
																							)
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_departamento WHERE dep_id = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Update(Departamento $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_departamento SET dep_nombre = ?, dep_paiid = ? WHERE dep_id = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
	
																							$data->nombre,
																							$data->paisid,
																							$data->id

									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	}

?>




