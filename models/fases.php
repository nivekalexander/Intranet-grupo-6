<?php
	class Fases
	{
		public $pdo;

		public function __Construct(){

			try   				{ $this->pdo=Database::Conectar();  }
			catch(Exception $e)	{ die($e->getMessage());			}
		}

		public function Select(){
						try 				{ 	$sql=$this->pdo->prepare("SELECT * FROM tbl_fases");
												$sql->execute();
												return $sql->fetchALL(PDO::FETCH_OBJ);
											}

						catch(Exception $e)	{
												die($e->getMessage());
											}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tbl_fases WHERE fas_id=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(Fases $data){
			try   {
	 				$sql= "INSERT INTO tbl_fases (fas_nombre) VALUES(?)";
	 				$this->pdo->prepare($sql)->execute(array($data->name));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(Fases $data){

			try   {

			 		$sql= "UPDATE tbl_fases SET fas_nombre=? WHERE fas_id=?;";
			 		$this->pdo->prepare($sql)->execute(array($data->name, $data->id)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "DELETE FROM tbl_fases WHERE fas_id=?;";
					$this->pdo->prepare($sql)->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>