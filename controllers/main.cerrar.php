<?php
		session_start();
        require_once('../models/database.php');
        require_once('../controllers/usuario.controller.php');
    
        $objUser=new UsuarioController();
        $respuesta=$objUser->Logout($_SESSION['SIdu']);
        
        session_destroy();
    
        header("Location: ../index.php");
        exit();
?>