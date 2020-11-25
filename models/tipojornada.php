<?php
	class TipoJornada
	{
		public $pdo;

		public function __Construct(){

			try   				{ $this->pdo=Database::Conectar();  }
			catch(Exception $e)	{ die($e->getMessage());			}
		}

		public function Select(){
						try 				{ 	$sql=$this->pdo->prepare("SELECT * FROM tbl_tipojornada");
												$sql->execute();
												return $sql->fetchALL(PDO::FETCH_OBJ);
											}

						catch(Exception $e)	{
												die($e->getMessage());
											}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tbl_tipojornada WHERE tij_id=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(TipoJornada $data){
			try   {
	 				$sql= "INSERT INTO tbl_tipojornada (tij_nombre) VALUES(?)";
	 				$this->pdo->prepare($sql)  ->execute(array($data->name ));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(TipoJornada $data){

			try   {

			 		$sql= "UPDATE tbl_tipojornada SET tij_nombre=? WHERE tij_id=?;";
			 		$this->pdo->prepare($sql)  ->execute(array($data->name,	$data->id)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "DELETE FROM tbl_tipojornada WHERE tij_id=?;";
					$this->pdo->prepare($sql) ->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>