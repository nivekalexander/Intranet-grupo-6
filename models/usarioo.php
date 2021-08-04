<?php 

require_once('./database.php');
require_once("./usuario.php");

$controller="Usuario";
$accion="Login2";

call_user_func(array($controller,$accion));
    

?>