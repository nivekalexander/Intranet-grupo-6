<?php
		require_once('../models/database.php');
		$controller = 'noticia';

		if ( !ISSET($_REQUEST['ctrl']) )
		{
			require_once("../controllers/$controller.controller.php");
			$controller = ucwords($controller).'Controller';
			$controller = new $controller;
			$controller->Index();
		}
		else
		{
			$controller = strtolower($_REQUEST['ctrl']);
			$accion = ucwords(strtolower(ISSET($_REQUEST['acti']) ? $_REQUEST['acti'] : 'Index'));
			require_once("../controllers/$controller.controller.php");
			$controller = ucwords($controller).'Controller';
			$controller = new $controller;
			call_user_func(array($controller,$accion));
		}
?>