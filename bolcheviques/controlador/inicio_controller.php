<?php
  require_once("bolcheviques/modelo/" . $pg . "_model.php");
  $noticias = New Noticias('noticias',$pg);
  if(isset($_POST['accion'])){
    $metodo=$_POST['accion'];
       $noticias->$metodo($_POST['id'],$_POST['titulo'],$_POST['texto'],$_POST['fichero_usuario']);
   }
  require_once($cabecera);
  require_once("bolcheviques/vista/main/" . $pg . "_main.php");
  require_once("bolcheviques/vista/common/pie.php");
 ?>
