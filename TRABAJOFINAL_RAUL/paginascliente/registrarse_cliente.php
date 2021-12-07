<?php include '../llamadas/nousuario.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>TABERNERO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/registroclientes.css">
</head>
<body>
<!-- CABECERA PRINCIPAL -->
<?php include '../partes/cabeceracliente_cliente.php'; ?>
<?php include '../partes/cabecera_cliente.php'; ?>

<!-------- PAGINA DE CONEXION Y METODOS ---------------------->
<?php
include_once '../controlador/conexion.php';
$obj=new Conectar();
?>

<!-------- OPCIONES DE AGREGAR PRODUCTOS --------------------->
<section class="registro">

    <form action="../llamadas/proceso_producto.php" method="post" enctype="multipart/form-data" class="formulario">

        <h1>REGISTRAR CLIENTE</h1>

        <div class="info_registro">

            <label>Codigo Cliente</label>       <input type="text" name="codigocli" required>
            <label>DNI</label>  <input type="text" name="dnicli" required>
            <label>Nombre</label>       <input type="text" name="nombrecli" required>
            <label>Apellido Paterno</label>       <input type="text" name="appcli" required>
            <label>Apellido Materno</label>     <input type="text" name="apmcli" required>
            <label>Teléfono</label>       <input type="text" name="telcli" required>
            <label>Correo Electrónico</label>     <input type="text" name="cocli" required>
        </div>

        <div class=" botonextras">
            <input type="hidden" name="accion" value="agregar_cliente"></div>
        <div class="mandar"><input type="submit" value="REGISTRARSE"></div>
        </div>

    </form>
</section>
<br>

</body>
</html>
