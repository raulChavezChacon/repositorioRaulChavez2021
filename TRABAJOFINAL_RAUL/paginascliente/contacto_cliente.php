<?php include '../llamadas/nousuario.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>TABERNERO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/contacto.css">
    <meta charset="UTF-8">

</head>
<body>
<!-- CABECERA PRINCIPAL -->
<?php include '../partes/cabeceracliente_cliente.php'; ?>
<?php include '../partes/cabecera_cliente.php'; ?>

<!-- CONTENIDO PARA CONTACTOS -->
<section class="empresa">
    <section class="Info_empresa">
        <section class="titulo">
            <img src="../Imagenes/icono_persona.png" class="logocontac">
            <h3>INFORMACIÓN<br>DE EMPRESA</h3>
        </section>

        <section class="items_empresa">
            <p><img src="../Imagenes/logo_correo.jpg" class="icontac">  <strong>CORREO</strong></p>
            <p>Tabernero@tabernero.com</p>
            <p><img src="../Imagenes/iconmap.png" class="icontac"><strong>UBICACIÓN</strong></p>
            <p>Av. 28 de Julio 753 Of. 302, Miraflores, Lima</p>

            <p><img src="../Imagenes/logo_telefono.png" class="icontac"><strong>TELEFONOS</strong></p>
            <p>WhatsApp: 960751496 <br>
                (511) 444-2310<br></li>
            </p>
        </section>
    </section>

    <!-- Formulario del contacto -->
    <form action="" class="formulario_usuario">
        <h2>CONTACTANOS</h2>
        <div class="info_usuario">
            <label for="Nombres"> Nombres *</label>
            <input type="text" id="nombres">

            <label for="Telefono"> Telefono / Celular</label>
            <input type="text" id="Telefono">

            <label for="email"> Correo Electronico</label>
            <input type="text" id="email">

            <label for="mensaje"> Mensaje</label>
            <textarea id="mensaje"></textarea>

            <input type="button" value="Enviar Mensaje" id="botonenvio">
        </div>
    </form>
</section>
</body>
</html>
