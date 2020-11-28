<?php  
	class Comentario {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select($foroid){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_comentario WHERE com_forid = ? ORDER BY com_id desc");
																	$sql->execute(array($foroid));
                                                                    return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
        }
        
        public function GetCount($foroid){
                                        try 					{	
                                                                    $sql=$this->pdo->prepare("SELECT COUNT(com_id) AS 'count' FROM tbl_comentario WHERE com_forid = ? ORDER BY com_id desc");
                                                                    $sql->execute(array($foroid));
                                                                    return $sql->fetch(PDO::FETCH_OBJ);
                                                                }

                                        catch (Exception $e) 	{	
                                                                    die($e->getMessage());
                                                                }
                            }

		public function Insert(Comentario $data){
								
										try 					{	$sql = "INSERT INTO tbl_comentario (for_titulo, for_fchfin, for_fchini, for_descrp, for_ficid) 
																						  VALUES (?, ?, ?, ?, ?)";
																	   $this->pdo->prepare($sql) 
																				 ->execute(
																							array(
																								$data->for_titulo,
																								$data->for_fchfin,
																								$data->for_fchini,
																								$data->for_descrp,
																								$data->for_ficid
																							)
																						);
																		
												}

							    catch (Exception $e) { die($e->getMessage()); }
							} 

	public function Delete($id){
									
											try 					{	$sql="DELETE FROM tbl_comentario WHERE for_id = ?";
																		$this->pdo->prepare($sql)
																				->execute(array($id));
																	}

											catch(exception $e)		{ die ($e->getMessage()); 				 }
			}

	public function Update(Comentario $datos){
									
		try {	
			$sql = "UPDATE tbl_comentario 
					SET for_titulo=?, for_descrp=?, for_fchini=?, for_fchfin=?
					WHERE for_id=?";
			$this->pdo->prepare($sql)->execute(
												array(
													$datos->for_titulo,
													$datos->for_descrp,
													$datos->for_fchini,																										
													$datos->for_fchfin,
													$datos->for_id													
												)
											);
		} catch(Exception $e) { die($e->getMessage()); }

	} 

}
?>