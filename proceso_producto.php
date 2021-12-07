<?php
    include_once '../controlador/conexion.php';
    $obj = new Conectar();

    //------------PARA INGRESAR UN PRODUCTO------------------------

    $accion = $_REQUEST['accion'];
    
    if ($accion === "agregar") {
    	$foto=$_FILES['imagenpro']['name'];
        $ruta=$_FILES['imagenpro']['tmp_name'];
        $producto="../Imagenes/".$foto;
        copy($ruta, $producto);
        $obj->agregarProducto(  $_REQUEST['codigopro'],
            $_REQUEST['nombrepro'],
            $_REQUEST['descripro'],
            $_REQUEST['preciopro'],
            $_REQUEST['stockpro'],
            $producto,
            $_REQUEST['cod_tipopro']);
        }
    //------------PARA INGRESAR UN CLIENTE--------------------
    else if ($accion === "agregar_cliente") {
        $obj->agregarCliente(  $_REQUEST['codigocli'],
            $_REQUEST['dnicli'],
            $_REQUEST['nombrecli'],
            $_REQUEST['appcli'],
            $_REQUEST['apmcli'],
            $_REQUEST['telcli'],
            $_REQUEST['cocli']);

    }

    //------------PARA ELIMINAR UN PRODUCTO------------------------
        else if ($accion === "eliminar") {
            $obj->eliminarProducto($_REQUEST['codigopro']);
        }

    //------------PARA MODIFICAR UN PRODUCTO------------------------

            else if ($accion === "modificar") 
            {
                if (!empty($_FILES['fot']['tmp_name'])) 
                {
                   $foto=$_FILES['imagenpro']['name'];
                	$ruta=$_FILES['imagenpro']['tmp_name'];
                	$destino="../imagenes/".$foto;
               		copy($ruta, $destino);

                	$obj->actualizarTodoProducto(  $_REQUEST['codigopro'],
                                                   $_REQUEST['nombrepro'], 
                                                   $_REQUEST['descripro'],
                                                   $_REQUEST['preciopro'], 
                                                   $_REQUEST['stockpro'],
                                                   $destino, 
                                                   $_REQUEST['cod_tipopro']); 
                } else 
                    {
                        $obj->actualizarProducto(   $_REQUEST['codigopro'],
                                                    $_REQUEST['nombrepro'], 
                                                    $_REQUEST['descripro'],
                                                    $_REQUEST['preciopro'], 
                                                    $_REQUEST['stockpro'], 
                                                    $_REQUEST['cod_tipopro']);            
                    }
            }
        
        //------------PARA BUSCAR UN PRODUCTO------------------------
            else if ($accion === "buscar") {
        }

        //-------- REDIRECCIONAMIENTO A LAS SIGUIENTES PAGINAS CON LOS VALORES---------------------
    header("location:../paginas/confirmacion.php");

    
?>
