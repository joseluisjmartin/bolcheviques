<?php
  require_once("bolcheviques/modelo/" . $pg . "_model.php");
  $apiCall = new Decoder($_GET['tag']);
  $data = $apiCall->getdata();
  $bolcheviques = new Clan($data);
  require_once($cabecera);
  require_once("bolcheviques/vista/main/" . $pg . "_main.php");
  require_once("bolcheviques/vista/common/pie.php");
 ?>
