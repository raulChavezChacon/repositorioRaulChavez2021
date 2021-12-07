<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css_estilos/session.css">
	<title>TABERNERO</title>
    
</head>
<body>

    <?php include '../partes/cabecera.php'; ?>
	<form action="../llamadas/validar_vendedor.php" method="post">
		<div class="principal">
			<br>
		<center>
		<h1>Log in Vendedores</h1>	
		<div class="login1">

		<div class="lado1">
		<h2>Ingresar el usuario: </h2>
		<input type="text" name="usuario"><br><br>
		<h2>Ingresar la contraseña: </h2>
		<input type="password" name="pass"><br><br>
		<input type="submit" name="Aceptar" value="Ingresar"><br><br>
		
		</div>

		<div class="lado2">
			<br>
			<img src="../Imagenes/icono_persona.png" style="width: 100px; height: 100px"><br><br>
			<img src="../Imagenes/llave.png" style="width: 100px; height: 100px">
		</div>
		</div><a href="principal.php"><h2>Regresar a la página Principal</h2></a><br><br>
		<a href="logueo.php"><h2>volver al login principal</h2></a><br><br></center>
		</div>
	</form>
	<?php include '../partes/piepagina.php'; ?>
</body>
</html>