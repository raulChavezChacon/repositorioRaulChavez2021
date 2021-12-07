<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css_estilos/cabeceralogin.css">
    <meta charset="UTF-8">
</head>

<body>
    
    <h2 class="">Usuario: <?= $_SESSION['usuario'] ?></h2>
   <header>
            <div >
                <nav class="login">
                    <a class="contlogin" href="../paginas/logueo.php">LOGIN</a>
                    <a class="contlogin" href="../llamadas/cerrar_cliente.php">CERRAR</a>
                    <a class="contlogin" href="../paginas/gestion.php">GESTOR</a>
                </nav>
            </div>
    </header>
</body>
</html>