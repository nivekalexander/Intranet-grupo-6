<?php


class Ficha
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_ficha ORDER BY fic_id DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Insert(Ficha $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_ficha (fic_codigo,fic_feccrn,fic_fecfn,fic_tijid,fic_modid,fic_tofid,fic_pfoid)
									 										        VALUES(?,?,?,?,?,?,?)";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
                                                                                                $data->fic_codigo,
                                                                                                $data->fic_feccrn,
                                                                                                $data->fic_fecfn,
                                                                                                $data->fic_tijid,
                                                                                                $data->fic_modid,
                                                                                                $data->fic_tofid,
                                                                                                $data->fic_pfoid
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

    public function Update(Ficha $datos)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_ficha SET fic_codigo= ?, fic_feccrn= ?,fic_fecfn= ?,fic_tijid= ?,fic_modid= ?,fic_tofid= ?,fic_pfoid= ?
                                                                  WHERE fic_id = ?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
                                                                                            $datos->fic_codigo,
                                                                                            $datos->fic_feccrn,
                                                                                            $datos->fic_fecfn,
                                                                                            $datos->fic_tijid,
                                                                                            $datos->fic_modid,
                                                                                            $datos->fic_tofid,
                                                                                            $datos->fic_pfoid,

									 									  			 	    $datos->fic_id
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Delete($fic_id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_ficha WHERE fic_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $fic_id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }



}


?>