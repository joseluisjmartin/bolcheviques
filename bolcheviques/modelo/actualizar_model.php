<?php
  require_once("bolcheviques/modelo/clases/decoder.php");
  require_once("bolcheviques/modelo/clases/clan.php");
  require_once('bolcheviques/modelo/db/conexion.php');
  $apiCall = new Decoder("clan/P2L9VVL");
  $data = $apiCall->getdata();
  $bolcheviques = new Clan($data);
  $db = new Conexion();
  $sentencia = $db->getconectado()->prepare("
  DELETE FROM usuarios
  WHERE id_usuario!='1';");
  $sentencia->execute();

  foreach ($bolcheviques->members as $member) {
    $insert = $db->getconectado()->prepare("
    INSERT INTO usuarios (nombre, password)
    VALUES (:nombre,:password);");
    $insert->bindParam(':nombre', $member->name);
    $insert->bindParam(':password', $member->name);
    $insert->execute();
  }
  header("Location: index.php?pg=dictadores&msg=completado");
?>
