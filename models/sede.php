<?php 


class Sede
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_sede ORDER BY sed_id  DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


		public function Insert(Sede $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_sede(`sed_nombre`, `sed_ciuid`)
									 										        VALUES(?,?)";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->nombre,
																								$data->ciudad
																								
																							)
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_sede WHERE sed_id =?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Update(Sede $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_sede SET sed_nombre = ?, sed_ciuid  = ? WHERE sed_id  = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
	
																							$data->nombre,
																							$data->ciudad,
																							$data->id

									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	}

?>




