<?php

    class MaterialApoyo{

        private $pdo;


        public function __Construct(){ 

                                        try 					{	$this->pdo=Database::Conectar();	}
                                        catch (Exception $e) 	{	die($e->getMessage());				}
        
                                    }
        public function Select()
                                    {
                                        try  				 {
                                                                $sql=$this->pdo->prepare("SELECT * FROM tbl_materialapoyo 
                                                                                        inner join tbl_usuario 
                                                                                        where  tbl_materialapoyo.map_usuid=tbl_usuario.usu_id
                                                                                        ORDER BY map_id DESC");
                                                                $sql->execute();
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