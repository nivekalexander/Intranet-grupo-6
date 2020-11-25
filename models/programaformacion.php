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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_ProgramaFormacion 
                                                                                          INNER JOIN tbl_estado 
                                                                                          INNER JOIN tbl_tipoprograma 
                                                                                          WHERE tbl_ProgramaFormacion.pfo_estid=tbl_estado.est_id 
                                                                                          AND tbl_programaformacion.pfo_tprid = tbl_tipoprograma.tpr_id 
                                                                                          ORDER BY tbl_ProgramaFormacion.pfo_id DESC");
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
									 							$sql="DELETE FROM tbl_ProgramaFormacion WHERE pfo_id=?";
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
									 							$sql="UPDATE tbl_ProgramaFormacion SET pfo_versn=?,pfo_duracn=?,pfo_abrvtr=?,pfo_nompro=?,pfo_estid=?,pfo_tprid=? 
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