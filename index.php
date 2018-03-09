<?php
   session_start();
   if(isset($_GET['out'])){
        session_destroy();
        header("Location: index.php");
    }
   if(isset($_SESSION['user'])){
        $cabecera='bolcheviques/vista/common/cabecera_registrado.php';
    }else{
        $cabecera='bolcheviques/vista/common/cabecera.php';
    }
    if (isset($_GET['pg'])){
            $pg = $_GET['pg'];
        }else{
            $pg = "inicio";
        }

    if (!file_exists('bolcheviques/controlador/' . $pg . '_controller.php')){
        ##el require da un fatal error, no controlable con el try/catch por lo que hay que controlarlo programaticamente con el file_exists
        #$pg="error";//por hacer
        $pg = "inicio";
    }
    require_once('bolcheviques/controlador/' . $pg . '_controller.php');
?>
