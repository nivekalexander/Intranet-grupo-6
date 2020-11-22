<?php

	require_once('../models/noticia.php');

	class NoticiaController
	{	
		private $noticia;

		function __Construct()	{
							  		$this->noticia= new Noticia(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{ 
									require_once('../views/frames/header.php');
									require_once('../views/frames/navbar.php');
									require_once('../views/frames/slidebar.php');
									require_once('../views/noticia/noticiaView.php');
									require_once('../views/frames/footer.php');
								}


    }
?>