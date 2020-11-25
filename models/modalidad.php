<?php
	class Modalidad
	{
		public $pdo;

		public function __Construct(){

			try   				{ $this->pdo=Database::Conectar();  }
			catch(Exception $e)	{ die($e->getMessage());			}
		}

		public function Select(){
						try 				{ 	$sql=$this->pdo->prepare("SELECT * FROM tbl_modalidad");
												$sql->execute();
												return $sql->fetchALL(PDO::FETCH_OBJ);
											}

						catch(Exception $e)	{
												die($e->getMessage());
											}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tbl_modalidad WHERE mod_id=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(Modalidad $data){
			try   {
	 				$sql= "INSERT INTO tbl_modalidad (mod_nombre) VALUES(?)";
	 				$this->pdo->prepare($sql)->execute(array($data->name));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(Modalidad $data){

			try   {

			 		$sql= "UPDATE tbl_modalidad SET mod_nombre=? WHERE mod_id=?;";
			 		$this->pdo->prepare($sql)->execute(array($data->name, $data->id)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "DELETE FROM tbl_modalidad WHERE mod_id=?;";
					$this->pdo->prepare($sql)->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>