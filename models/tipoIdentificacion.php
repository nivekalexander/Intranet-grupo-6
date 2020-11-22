<?php 


class Tipoidentificacion
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_tipdoc_usuario ORDER BY tip_id DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


		public function Insert(Tipoidentificacion $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_tipdoc_usuario(`tip_tipidn`)
									 										        VALUES(?)";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->tipo
																								
																							)
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_tipdoc_usuario WHERE tip_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Update(Tipoidentificacion $datos)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_tipdoc_usuario SET tip_tipidn=?

									 							WHERE tip_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
	
                                                                                             $datos->tipo,
                                                                                             $datos->id

									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	}

?>

