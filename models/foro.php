<?php  
	class Foro {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select($fichapuntero){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT f.*, usu_nombre, usu_aplldo
																							FROM tbl_foro f
																							INNER JOIN tbl_usuario u
																								ON f.for_usunumdnt = u.usu_numdnt
																							WHERE for_ficcodigo = ?
																							ORDER BY for_id desc");
																	$sql->execute(array($fichapuntero));
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
		}

		public function Insert(Foro $data){
								
										try 					{	$sql = "INSERT INTO tbl_foro (for_titulo, for_fchfin, for_descrp, for_ficcodigo,for_usunumdnt) 
																						  VALUES (?, ?, ?, ?, ?)";
																	   $this->pdo->prepare($sql) 
																				 ->execute(
																							array(
																								$data->for_titulo,
																								$data->for_fchfin,
																								
																								$data->for_descrp,
																								$data->for_ficid,
																								$data->for_usunumdnt
																							)
																						);
																		
												}

							    catch (Exception $e) { die($e->getMessage()); }
							} 

	public function Delete($id){
									
											try 					{	$sql="DELETE FROM tbl_foro WHERE for_id = ?";
																		$this->pdo->prepare($sql)
																				->execute(array($id));
																	}

											catch(exception $e)		{ die ($e->getMessage()); 				 }
			}

	public function Update(Foro $datos){
									
		try {	
			$sql = "UPDATE tbl_foro 
					SET for_titulo=?, for_descrp=?, for_fchfin=?
					WHERE for_id=?";
			$this->pdo->prepare($sql)->execute(
												array(
													$datos->for_titulo,
													$datos->for_descrp,
																																							
													$datos->for_fchfin,
													$datos->for_id													
												)
											);
		} catch(Exception $e) { die($e->getMessage()); }

	} 

}
?>