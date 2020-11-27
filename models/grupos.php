<?php 


class Grupos
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_ficha 
                                                                                          INNER JOIN tbl_programaformacion 
                                                                                          INNER JOIN tbl_tipoprograma 
                                                                                          WHERE tbl_ficha.fic_pfoid = tbl_programaformacion.pfo_id 
                                                                                          and tbl_programaformacion.pfo_tprid = tbl_tipoprograma.tpr_id 
                                                                                          ORDER BY tbl_ficha.fic_id DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
					 

	}

?>