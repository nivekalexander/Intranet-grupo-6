<?php


class Estado
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_estado ORDER BY est_id");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Insert(Estado $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_estado(est_nombre)
									 										        VALUES(?)";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $data->nombre
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

    public function Update(Estado $datos)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_estado SET est_nombre = ? WHERE est_id = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $datos->nombre,
									 									  			 	    $datos->id
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_estado WHERE est_id=?";
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