<?php 


class ProgramaFormacion
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_Programaformacion 
                                                                                          INNER JOIN tbl_estado 
                                                                                          INNER JOIN tbl_tipoprograma 
                                                                                          WHERE tbl_Programaformacion.pfo_estid=tbl_estado.est_id 
                                                                                          AND tbl_Programaformacion.pfo_tprid = tbl_tipoprograma.tpr_id 
                                                                                          ORDER BY tbl_Programaformacion.pfo_id DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
					 


		public function Insert(ProgramaFormacion $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_ProgramaFormacion(`pfo_versn`, `pfo_duracn`, `pfo_abrvtr`, `pfo_nompro`, `pfo_estid`, `pfo_tprid`)
                                                                                     VALUES(?,?,?,?,?,?)";
                                                                                     			 

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
																								$data->version,
																								$data->duracion,
																								$data->abreviacion,
																								$data->nombre,
                                                                                                $data->estado,
                                                                                                $data->tipoprograma
																							)
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_Programaformacion WHERE pfo_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Update(ProgramaFormacion $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_Programaformacion SET pfo_versn=?,pfo_duracn=?,pfo_abrvtr=?,pfo_nompro=?,pfo_estid=?,pfo_tprid=? 
																 WHERE pfo_id=?";
																 
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
	
                                                                                            $data->version,
                                                                                            $data->duracion,
                                                                                            $data->abreviacion,
                                                                                            $data->nombre,
                                                                                            $data->estado,
                                                                                            $data->tipoprograma,

 																							$data->id

									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
	}

?>