<?php
	session_start();
	$usuario = $_POST['usuario'];
	$password = $_POST['pass'];

	$_SESSION['usuario']= $usuario;
	$_SESSION['pass']= $password;
	
	$conexion = mysqli_connect("localhost","root","","bd_tabernero");
	$sql = "select * from trabajador where nomtrab='$usuario' and dni_trab='$password'";
	$resultado = mysqli_query($conexion, $sql);
	$fila =mysqli_num_rows($resultado);
	if ($fila>0){
		header("Location: ../paginas/principal.php");
	}else{
		echo '<script type="text/javascript">';
        echo 'alert("Usuario Incorrecto")';
        echo '</script>';
	}
	mysqli_close($conexion);
 ?>