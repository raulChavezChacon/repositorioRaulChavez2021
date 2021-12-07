<?php
session_start();
session_destroy();
header("Location: ../paginascliente/principal_cliente.php");
?>
