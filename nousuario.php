<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		$_SESSION['usuario']="Anonimo, unete a nuestro grupo de socios";
	}
 ?>