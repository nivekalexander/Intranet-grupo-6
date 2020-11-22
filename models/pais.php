<?php 


class Pais
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_pais ORDER BY pai_id DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


		public function Insert(Pais $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_pais(`pai_nombre`, `pai_postal`)
									 										        VALUES(?,?)";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->nombre,
																								$data->postal
																								
																							)
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_pais WHERE pai_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Update(Pais $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_pais SET pai_nombre = ?, pai_postal = ? WHERE pai_id = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
	
																							$data->nombre,
																							$data->postal,
																							$data->id

									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	}

?>




