<?php

    require_once('../models/materialapoyo.php');
    require_once('../models/fases.php');

	class MaterialapoyoController
	{	
		private $materialapoyo;

		function __Construct()	{
                                      $this->materialapoyo= new Materialapoyo();
                                      $this->fases= new Fases(); 	 	
							  	}

		public function Index()
								{
									   
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									require_once('../views/materialapoyo/materialapoyoView.php');
									require_once('../views/frames/firtsfooter.php');
									require_once('../views/frames/footer.php');
                                }
        public function Faseconfirmar()
                                    {
                                        
                                        


                                        $idfase=$_REQUEST['fase'];
                                        $fichapuntero=$_REQUEST['fcpt'];


                                        

                                        require_once('../views/materialapoyo/materialapoyoSelect.php'); 

                                    }



	}

?>