<?php 


class Persona
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_persona ORDER BY per_id DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


		public function Insert(Persona $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_persona(`per_nombre`, `per_aplldo`, `per_dirccn`, `per_correo`,`per_telid`, `per_tipid`)VALUES(?,?,?,?,?,?)";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->nombre,
																								$data->apelliod,
																								$data->direcci,
																								$data->correo,
																								$data->num,
																								$data->doc
																								

																							)
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_persona WHERE per_id = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Update(Persona $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_persona SET per_nombre = ?,per_aplldo = ?,per_dirccn = ?,per_correo = ?, per_tipid = ?, per_telid = ? WHERE per_id = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
	
																							$data->nombre,
																							$data->apellido,
																							$data->direcci,
																							$data->correo,
																							$data->doc,
																							$data->num,
																							$data->id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	}

?>




