<?php

    class MaterialApoyo{

        private $pdo;


        public function __Construct(){ 

                                        try 					{	$this->pdo=Database::Conectar();	}
                                        catch (Exception $e) 	{	die($e->getMessage());				}
        
                                    }
        public function Select($idfase,$fichapuntero)
                                    {
                                        try  				 {


                                                                $sql=$this->pdo->prepare("SELECT * FROM tbl_materialapoyo 
                                                                                        JOIN tbl_materialapoyo_ficha 
                                                                                            ON tbl_materialapoyo_ficha.maf_mapid = tbl_materialapoyo.map_id
                                                                                        JOIN tbl_usuario 
                                                                                            ON tbl_usuario.usu_numdnt = tbl_materialapoyo.map_usunumdnt 
                                                                                        JOIN tbl_ficha 
                                                                                            ON tbl_materialapoyo_ficha.maf_ficcodigo = tbl_ficha.fic_codigo
                                                                                        JOIN tbl_fases
                                                                                            ON tbl_materialapoyo.map_fasid = tbl_fases.fas_id
                                                                                        WHERE tbl_ficha.fic_codigo = ? AND tbl_fases.fas_id = ?");
                                                                $sql->execute(array(
                                                                    
                                                                                    $fichapuntero,
                                                                                    $idfase
                                                                
                                                                ));
                                                                return $sql->fetchALL(PDO::FETCH_OBJ);
                                                               


                                                            }
                                        catch (Exception $e) {	die($e->getMessage());			 }
                                    }
        public function GetMaterialApoyo($datos,$url)
                                    {
                                        try  				 {


                                                                $sql=$this->pdo->prepare("SELECT map_id FROM tbl_materialapoyo 
                                                                                            WHERE map_titulo=? 
                                                                                            and map_descrp=?
                                                                                            and map_archurl=?
                                                                                            and map_fasid=?
                                                                                            and map_usunumdnt=? ");
                                                                $sql->execute(array(
                                                                    
                                                                                    $datos->titulo,
                                                                                    $datos->descrp,
                                                                                    $url,
                                                                                    $datos->fases,
                                                                                    $datos->publicador
                                                                
                                                                ));
                                                                return $sql->fetch(PDO::FETCH_OBJ);
                                                            


                                                            }
                                        catch (Exception $e) {	die($e->getMessage());			 }
                                    }

        public function Insert($url,$datos)
                                    { 
                                        try  				 {
                                                                $sql1="INSERT INTO tbl_materialapoyo(map_titulo,map_descrp,map_archurl,map_fasid,map_usunumdnt) 
                                                                      VALUES(?,?,?,?,?);";
                                                                $this->pdo->prepare($sql1)
                                                                        ->execute(array(
                                                                                            $datos->titulo,
                                                                                            $datos->descrp,
                                                                                            $url,
                                                                                            $datos->fases,
                                                                                            $datos->publicador
                                                                                            
                                                                                           
                                                                                        ));
                                                               
                                                                
                                                                    $sql2=$this->GetMaterialApoyo($datos,$url);           
                                                                                        
                                                                                        

                                                                                            
                                                                    $sql3="INSERT INTO tbl_materialapoyo_ficha(maf_mapid,maf_ficcodigo ) 
                                                                        VALUES(?,?);";
                                                                    $this->pdo->prepare($sql3)
                                                                        ->execute(array(

                                                                                        $sql2->map_id,
                                                                                        $datos->ficid
                                                                                        

                                                                                    )); 
                                                              

                                                            }
                                        catch (Exception $e) {	die($e->getMessage());}
                                    }

        public function Delete($id)
                                    {
                                        try  				 {
                                                                $sql="DELETE FROM tbl_materialapoyo WHERE not_id=?";
                                                                $this->pdo->prepare($sql)
                                                                        ->execute(array($id));
                                                            }
                                        catch (Exception $e) {	die($e->getMessage());			 }
                                    }

        public function Update($url,$datos)
                                    {
                                        try  				 {
                                                                $sql="UPDATE tbl_materialapoyo SET map_titulo=?,map_descrp=?,map_archurl=?,map_fasid=?,map_usunumdnt=?
                                                                WHERE map_id=?";
                                                                $this->pdo->prepare($sql)
                                                                        ->execute(array(
                                                                                        
                                                                                        
                                                                                        
                                                                                        $datos->titulo,
                                                                                        $datos->descrp,
                                                                                        $url,
                                                                                        $datos->fases,
                                                                                        $datos->publicador,
                                                                                        

                                                                                        $datos->id,
                                                                                    ));


                                                                $sql2="UPDATE tbl_materialapoyo_ficha   SET maf_mapid=?,maf_ficcodigo=?
                                                                WHERE maf_mapid=?";
                                                                $this->pdo->prepare($sql2)
                                                                        ->execute(array(
                                                                                        
 
                                                                                        $datos->id,
                                                                                        $datos->ficid,
                                                                                        $datos->id
                                                                                    ));
                                                            }
                                        catch (Exception $e) {	die($e->getMessage());			 }
                                    }

    }
?>