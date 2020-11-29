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
                                                                                            ON tbl_usuario.usu_id = tbl_materialapoyo.map_usuid 
                                                                                        JOIN tbl_ficha 
                                                                                            ON tbl_materialapoyo_ficha.maf_ficid = tbl_ficha.fic_id
                                                                                        JOIN tbl_fases
                                                                                            ON tbl_materialapoyo.map_fasid = tbl_fases.fas_id
                                                                                        WHERE tbl_ficha.fic_id = ? AND tbl_fases.fas_id = ?");
                                                                $sql->execute(array(
                                                                    
                                                                                    $fichapuntero,
                                                                                    $idfase
                                                                
                                                                ));
                                                                return $sql->fetchALL(PDO::FETCH_OBJ);
                                                               


                                                            }
                                        catch (Exception $e) {	die($e->getMessage());			 }
                                    }


        public function Insert($url)
                                    { 
                                        try  				 {
                                                                $sql="INSERT INTO tbl_materialapoyo(not_url) VALUES(?);";
                                                                $this->pdo->prepare($sql)
                                                                        ->execute(array($url));
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

        public function Update(Materialapoyo $noti)
                                    {
                                        try  				 {
                                                                $sql="UPDATE tbl_materialapoyo SET not_url=?
                                                                WHERE not_id=?";
                                                                $this->pdo->prepare($sql)
                                                                        ->execute(array(
                                                                                        $noti->url,
                                                                                        $noti->id
                                                                                    ));
                                                            }
                                        catch (Exception $e) {	die($e->getMessage());			 }
                                    }

    }
?>