<?php
  require_once("bolcheviques/modelo/" . $pg . "_model.php");
  $logeado = new Cuentas($_POST['user'],$_POST['pass']);
  if ($logeado->getEsValida()) {
    header("Location: index.php");
  }else {
    header("Location: index.php?pg=login&fail=credenciales incorrectas");
  }
 ?>
