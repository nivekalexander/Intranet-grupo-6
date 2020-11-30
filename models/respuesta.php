<?php  
	class Respuesta {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function SelectResp($comid){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * 
                                                                                            FROM tbl_respuesta
                                                                                            WHERE res_comid = ?");
																	$sql->execute(array($comid));
                                                                    return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
        }           

		public function Insert(Respuesta $data){
								
										try 					{	$sql = "INSERT INTO tbl_respuesta (com_respst, com_perprt, com_forid) 
																						  VALUES (?, ?, ?)";
																	   $this->pdo->prepare($sql) 
																				 ->execute(
																							array(
																								$data->respst,
																								$data->perprt,
																								$data->forid
																							)
																						);
																		
												}

							    catch (Exception $e) { die($e->getMessage()); }
							} 

	public function Delete($id){
									
											try 					{	$sql="DELETE FROM tbl_respuesta WHERE com_id = ?";
																		$this->pdo->prepare($sql)
																				->execute(array($id));
																	}

											catch(exception $e)		{ die ($e->getMessage()); 				 }
			}

	public function Update(Respuesta $datos){
									
		try {	
			$sql = "UPDATE tbl_respuesta 
					SET com_respst=?
					WHERE com_id=?";
			$this->pdo->prepare($sql)->execute(
												array(
													$datos->respst,
													$datos->id
												)
											);
		} catch(Exception $e) { die($e->getMessage()); }

	} 

}
?>