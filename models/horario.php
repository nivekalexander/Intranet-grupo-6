<?php  
	class Horario{

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select()
									 {
									 	try  				 {
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_horario");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Get($ficid)
		{
									try  				 {
															$sql=$this->pdo->prepare("SELECT * FROM tbl_horario WHERE hor_ficcodigo = ?");
															$sql->execute(array($ficid));
															return $sql->fetch(PDO::FETCH_OBJ);
															}
									catch (Exception $e) {	die($e->getMessage());			 }
		}

		public function Insert(Horario $datos)
									 { 
									 	try  				 {
									 							$sql="INSERT INTO tbl_horario(hor_url, hor_triini, hor_trifin, hor_trinum, hor_ficcodigo) VALUES(?,?,?,?,?);";
									 							$this->pdo->prepare($sql)
																		   ->execute(array(
																						   $datos->url,
																						   $datos->triini,
																						   $datos->trifin,
																						   $datos->trinum,
																						   $datos->fichaid	
																		));
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());}
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_horario WHERE hor_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(array($id));
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Update(Horario $datos)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_horario SET hor_url = ?, hor_triini = ?, hor_trifin = ?, hor_trinum = ?
									 							WHERE hor_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(array(																						
																						$datos->url,
																						$datos->triini,
																						$datos->trifin,
																						$datos->trinum,
																						$datos->id
																					));
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


	}
?>