<?php
	class Programa
	{
		public $pdo;

		public function __Construct(){

			try   				{ $this->pdo=Database::Conectar();  }
			catch(Exception $e)	{ die($e->getMessage());			}
		}

		public function Select(){
						try 				{ 	$sql=$this->pdo->prepare("SELECT * FROM tblprogramaformacion");
												$sql->execute();
												return $sql->fetchALL(PDO::FETCH_OBJ);
											}

						catch(Exception $e)	{
												die($e->getMessage());
											}
		}

		public function Get($id) {
					 		
			try   {
		 			$sql= $this->pdo->prepare("SELECT * FROM tblprogramaformacion WHERE Pro_IdProg=?;");
		 			$sql->execute(array($id));
		 			return $sql->fetch(PDO::FETCH_OBJ); 
		 		}catch (Exception $e) {

		 		  die($e->getMessage()); 
		 		     }
	 		
	 		}
 		public function Insert(Programa $data){
			try   {
	 				$sql= "INSERT INTO tblprogramaformacion (Pro_NombreProg) VALUES(?)";
	 				$this->pdo->prepare($sql)  ->execute(array($data->name ));
 				 }catch (Exception $e) {
 				   die($e->getMessage());

 				     }
				 }

		 public function Update(Programa $data){

			try   {

			 		$sql= "UPDATE tblprogramaformacion SET Pro_NombreProg=?   WHERE Pro_IdProg=?;";
			 		$this->pdo->prepare($sql)  ->execute(array($data->name,	$data->id)); 
					}catch (Exception $e) {
					  die($e->getMessage());
					
					    }

					}

		public function Delete($id){
			try   {
					$sql= "DELETE FROM tblprogramaformacion WHERE Pro_IdProg=?;";
					$this->pdo->prepare($sql)  ->execute(array($id));
					 }
			 catch (Exception $e) { 
					  die($e->getMessage());
					    }

				}


	}

?>