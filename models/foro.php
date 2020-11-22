<?php  
	class Foro {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function ForoSelect(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_foro ORDER BY foro_id desc");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
		}

		public function ForoInsertarBD(Foro $data){
								
										try 					{	$sql = "INSERT INTO tbl_foro (foro_titulo, foro_mensaje, foro_fecha_inicio, foro_fecha_fin) 
																						  VALUES (?, ?, ?, ?)";
																	   $this->pdo->prepare($sql) 
																				 ->execute(
																							array(
																								$data->foro_titulo,
																								$data->foro_mensaje,
																								$data->foro_fecha_inicio,
																								$data->foro_fecha_fin
																							)
																						);
																		
												}

							    catch (Exception $e) { die($e->getMessage()); }
							} 

public function Delete($id){
								
										try 					{	$sql="DELETE FROM tbl_foro WHERE foro_id=?";
																	$this->pdo->prepare($sql)
										  					  				  ->execute(
										  												array(
										  					  									$id	
										  													)
										  												);
										  						}

										catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

public function Update(Foro $data){
								
			try 					{	$sql = "UPDATE tbl_foro SET foro_titulo=?, foro_mensaje=?, foro_fecha_inicio=?, foro_fecha_fin=?
															  WHERE foro_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->foro_titulo,
																	$data->foro_mensaje,
																	$data->foro_fecha_inicio,
																	$data->foro_fecha_fin,
																	$data->foro_id
																)
															);
					}

	catch (Exception $e) { die($e->getMessage()); }

} 

	}
?>