<?php
	session_start();
	$usuario = $_POST['usuario'];
	$password = $_POST['pass'];

	$_SESSION['usuario']= $usuario;
	$_SESSION['pass']= $password;
	
	$conexion = mysqli_connect("localhost","root","","bd_tabernero");
	$sql = "select * from clientes where codcliente='$usuario' and dni_clie='$password'";
	$resultado = mysqli_query($conexion, $sql);
	$fila =mysqli_num_rows($resultado);
	if ($fila>0){
		header("Location: ../paginascliente/principal_cliente.php");
	}else{
		//echo "Usuario o password no validos";
        echo '<script type="text/javascript">';
        echo 'alert("Usuario Incorrecto")';
        echo '</script>';
	}
	mysqli_close($conexion);
 ?>