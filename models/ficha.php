<?php


class Ficha
{
	private $pdo;


	public function __construct()
									 {
									 	try  				 {	$this->pdo=Database::Conectar(); }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Select()
									 {
									 	try  				 {
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_ficha 
																 INNER JOIN tbl_tipojornada 
																 INNER JOIN tbl_modalidad 
																 INNER JOIN tbl_tipooferta 
																 INNER JOIN tbl_Programaformacion
																 WHERE tbl_ficha.fic_tijid = tbl_tipojornada.tij_id AND
																 tbl_ficha.fic_modid = tbl_modalidad.mod_id AND
																 tbl_ficha.fic_tofid = tbl_tipooferta.tof_id AND
																 tbl_ficha.fic_pfoid = tbl_Programaformacion.pfo_id
																ORDER BY tbl_ficha.fic_codigo DESC");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Insert(Ficha $datos)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_ficha (fic_codigo,fic_feccrn,fic_fecfn,fic_tijid,fic_modid,fic_tofid,fic_pfoid)
									 										        VALUES(?,?,?,?,?,?,?);";
									 							if($this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
                                                                                                $datos->fic_codigo,
                                                                                                $datos->fic_feccrn,
                                                                                                $datos->fic_fecfn,
                                                                                                $datos->fic_tijid,
                                                                                                $datos->fic_modid,
                                                                                                $datos->fic_tofid,
                                                                                                $datos->fic_pfoid
									 									  			 	   )
																					   )){
																						   if(!file_exists("../assets/fichas/$datos->fic_codigo")){
																						   mkdir("../assets/fichas/$datos->fic_codigo",0777);
																							}else{}
																					   }			
																					
									 						 }
										 catch (PDOException $e){$fichaExist = $e->getCode();
																	
																		if($fichaExist == 23000){
																			return "La ficha ya existe";
																		}else{
																			die($e->getMessage());
																		}
																}
									 }

    public function Update(Ficha $datos, $update)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_ficha SET fic_codigo= ?, fic_feccrn= ?,fic_fecfn= ?,fic_tijid= ?,fic_modid= ?,fic_tofid= ?,fic_pfoid= ?
                                                                  WHERE fic_codigo = $update";
									 							if($this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
                                                                                            $datos->fic_codigo,
                                                                                            $datos->fic_feccrn,
                                                                                            $datos->fic_fecfn,
                                                                                            $datos->fic_tijid,
                                                                                            $datos->fic_modid,
                                                                                            $datos->fic_tofid,
                                                                                            $datos->fic_pfoid
									 									  			 	   
									 									  			 	   )
																 						)){ rename("../assets/fichas/$update","../assets/fichas/$datos->fic_codigo"); }

										 											}
									 						 
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

	public function Delete($fic_id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_ficha WHERE fic_codigo=?";
									 							if($this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $fic_id
									 									  			 	  )
									 									  			)){
																						if (! is_dir("../assets/fichas/$fic_id")) { 
																							 throw new InvalidArgumentException("$fic_id must be a directory"); 
																						} 
																						if (substr("../assets/fichas/$fic_id", strlen("../assets/fichas/$fic_id") - 1, 1) != '/') { 
																							"../assets/fichas/$fic_id" .= '/'; 
																						} 
																						$files = glob("../assets/fichas/$fic_id" . '*', GLOB_MARK); 
																							foreach ($files as $file) { 
																								 if (is_dir($file)) { 
																									  self::deleteDir($file); 
																										 } else { 
																						unlink($file); 
																						 } 
																						} 
																						rmdir("../assets/fichas/$fic_id"); 
																					   }
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

									 

}


?>