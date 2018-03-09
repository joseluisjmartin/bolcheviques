<?php
  require_once("bolcheviques/modelo/" . $pg . "_model.php");
  $mensajes = New Mensajes('mensajes',$pg);
  if(isset($_POST['accion'])){
    $metodo=$_POST['accion'];
       $mensajes->$metodo($_POST['id'],$_SESSION['user'],$_POST['texto']);
   }
  require_once($cabecera);
  require_once("bolcheviques/vista/main/" . $pg . "_main.php");
  require_once("bolcheviques/vista/common/pie.php");
 ?>
