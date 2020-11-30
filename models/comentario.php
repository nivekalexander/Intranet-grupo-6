<?php  
	class Comentario {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select($foroid){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT *,
																									(SELECT COUNT(res_id) 
																									FROM tbl_respuesta
																									WHERE res_comid = tbl_comentario.com_id) 
																										AS 'respuestas'
																								FROM tbl_comentario
																								WHERE com_forid = ?");
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
								
										try 					{	$sql = "INSERT INTO tbl_comentario (com_respst, com_perprt, com_forid) 
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
									
											try 					{	$sql="DELETE FROM tbl_comentario WHERE com_id = ?";
																		$this->pdo->prepare($sql)
																				->execute(array($id));
																	}

											catch(exception $e)		{ die ($e->getMessage()); 				 }
			}

	public function Update(Comentario $datos){
									
		try {	
			$sql = "UPDATE tbl_comentario 
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