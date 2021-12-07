<?php include '../llamadas/nousuario.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>TABERNERO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/productos.css">
</head>

<body>

<!-- CABECERA PRINCIPAL -->
<?php include '../partes/cabeceracliente_cliente.php'; ?>
<?php include '../partes/cabecera_cliente.php'; ?>

<!-- CONEXION CON BASE DE DATOS -->
<?php
include_once '../controlador/conexion.php';
$obj=new Conectar();
?>

<!----------------- CONTENIDO GENERAL ---------------------------->
<br>
<h2>NUESTROS PRODUCTOS</h2>
<section class="general">

    <!----------------- PARTE IZQUIERDA ---------------------------->
    <div class="filtros">
        <h3>VINOS</h3>
        <!----------------- ACCION BUSCAR TIPO VINO------------------------>
        <form action="productos.php" method="post" enctype="multipart/form-data">
            <div class="selecvino">
                <select name="tip" >
                    <?php foreach ($obj->listarTipo() as $a=> $datos)
                    {
                        ?>        <option value="<?=$datos[0] ?>"><?= $datos[1]?></option>
                        <?php
                    }
                    ?>
                </select>
                <input type="hidden" name="accion" value="buscar">
                <input type="submit" value="BUSCAR"><br>
            </div>
        </form>
        <!------FIN BUSCAR --------->


        <!----------------- MARCAS ---------------------------->

        <h3>MARCA</h3>
        <div class="filtroscontenido">
            <nav><input type="checkbox" name="Alfa">   Alfa Crux
            </nav>
            <nav><input type="checkbox" name="Giramundo">   Giramundo
            </nav>
            <nav><input type="checkbox" name="Wines">   Huentala Wines
            </nav>
            <nav><input type="checkbox" name="Canale">  Humberto Canale
            </nav>
            <nav><input type="checkbox" name="Cardos">  Los Cardos
            </nav>
            <nav><input type="checkbox" name="Haroldos">   Los Haroldos
            </nav>
            <nav><input type="checkbox" name="Parcel">   Parcel
            </nav>
            <nav><input type="checkbox" name="Doña">   Doña Paula
            </nav><br>
        </div>

        <!----------------- PRECIOS ---------------------------->

        <h3>PRECIOS</h3>
        <div class="filtroscontenido">
            <nav><input type="radio" name="1">  Menos de 20
            </nav>
            <nav><input type="radio" name="2">  20 a 50
            </nav>
            <nav><input type="radio" name="3">  81 a 120
            </nav>
            <nav><input type="radio" name="4">  121 a 200
            </nav>
            <nav><input type="radio" name="5">  200 a más
            </nav>
        </div>
    </div>

    <!----------------- PARTE DERECHA ---------------------------->
    <div class="productos" method="post" enctype="multipart/form-data">

        <!----------------- MOSTRAR VINOS POR TIPO------------------------>
        <?php
        error_reporting(0);
        $tipo=$_REQUEST['tip'];
        foreach($obj->listarProducto($tipo) as $a=>$datos)
        {
            if($tipo===$datos[6])
            {
                echo "<div class='cadavino'>";
                ?>

                <img src="<?=$datos[5]?>" width="70" height="220"> <br><br>

                <?php
                echo "  $datos[1]<br>
                                        $datos[2]<br>
                                        $datos[3]<br><br>
                                        <input type='submit' value='COMPRAR'></div>";
                ?>
                <?php
            }
        }?>
        <!----------------- MOSTRAR TODOS LOS VINOS------------------------>

        <?php
        $tipo=$_REQUEST['tip'];
        if ($tipo==null)
        {
            foreach($obj->listarProducto() as $a=>$datos)
            {
                echo "  <div class='cadavino'>";
                ?>
                <img src="<?=$datos[5]?>" width="70" height="220"> <br><br>
                <?php
                echo "  $datos[1]<br>
                                $datos[2]<br>
                                $datos[3]<br><br>
                                <input type='submit' value='COMPRAR'>
                                </div>";
                ?>
                <?php
            }
        }
        ?>

    </div>
</section>
</body>
</html>
