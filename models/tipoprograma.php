<?php
	class TipoPrograma
	{
		public $pdo;

		public function __Construct(){

			try   				{ $this->pdo=Database::Conectar();  }
			catch(Exception $e)	{ die($e->getMessage());			}
		}

		public function Select(){
						try 				{ 	$sql=$this->pdo->prepare("SELECT * FROM tbl_tipoprograma");
												$sql->execute();
												return $sql->fetchALL(PDO::FETCH_OBJ);
											}

						catch(Exception $e)	{
												die($e->getMessage());
											}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tbl_tipoprograma WHERE tpr_id=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(TipoPrograma $data){
			try   {
	 				$sql= "INSERT INTO tbl_tipoprograma (tpr_nombre) VALUES(?)";
	 				$this->pdo->prepare($sql)  ->execute(array($data->name ));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(TipoPrograma $data){

			try   {

			 		$sql= "UPDATE tbl_tipoprograma SET tpr_nombre=? WHERE tpr_id=?;";
			 		$this->pdo->prepare($sql)  ->execute(array($data->name,	$data->id)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "DELETE FROM tbl_tipoprograma WHERE tpr_id=?;";
					$this->pdo->prepare($sql)  ->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>