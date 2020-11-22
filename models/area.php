<?php 


class Area
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_area ORDER BY are_id  DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


		public function Insert(Area $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_area(`are_nombre`, `are_sedid`)
									 										        VALUES(?,?)";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->nombre,
																								$data->sede
																								
																							)
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_area WHERE are_id =?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Update(Area $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_area SET are_nombre = ?, are_sedid  = ? WHERE are_id  = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
	
																							$data->nombre,
																							$data->sede,
																							$data->id

									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	}

?>




