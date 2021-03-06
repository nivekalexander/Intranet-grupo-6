<?php 


class Grupos
	{
		private $pdo;

		public function __Construct()
									 {
									 	try  				 {	$this->pdo=Database::Conectar(); }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Select($id,$idbuscar)
									 {
									 	try  				 {
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_ficha 
																 							INNER JOIN tbl_programaformacion on tbl_programaformacion.pfo_id=?
																 							INNER JOIN tbl_tipoprograma
																 							INNER JOIN  tbl_usuario_ficha  
																 							WHERE tbl_ficha.fic_pfoid = tbl_programaformacion.pfo_id 
																 							and tbl_programaformacion.pfo_tprid = tbl_tipoprograma.tpr_id 
																 							and tbl_usuario_ficha.usf_usunumdnt = ?
																 							and tbl_usuario_ficha.usf_ficcodigo =tbl_ficha.fic_codigo
																 							ORDER BY tbl_ficha.fic_codigo ");
									 							$sql->execute(array($idbuscar,$id));
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }
		public function SelectAdmin($idbuscar)
		{
		try  				 {
								$sql=$this->pdo->prepare("SELECT * FROM tbl_ficha 
															INNER JOIN tbl_programaformacion on tbl_programaformacion.pfo_id=?
															INNER JOIN tbl_tipoprograma 
															WHERE tbl_ficha.fic_pfoid = tbl_programaformacion.pfo_id 
															and tbl_programaformacion.pfo_tprid = tbl_tipoprograma.tpr_id 
															ORDER BY tbl_ficha.fic_codigo ");
								$sql->execute(array($idbuscar));
								return $sql->fetchALL(PDO::FETCH_OBJ);
								}
		catch (Exception $e) {	die($e->getMessage());			 }
		}

					 

	}

?>