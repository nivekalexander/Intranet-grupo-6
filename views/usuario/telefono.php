<?php


class Telefono
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_telefono ORDER BY tel_id DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Insert(Telefono $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_telefono(tel_numero)
									 										        VALUES(?)";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $data->numero
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

    public function Update(Telefono $datos)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_telefono SET tel_numero = ? WHERE tel_id = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $datos->numero,
									 									  			 	    $datos->id
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_telefono WHERE tel_id = ?";
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