<?php
  require_once('bolcheviques/modelo/db/conexion.php');
  class Cuentas{
    private $db;
    private $user;
    private $pass;
    private $esValida;

    function __construct($anUser,$aPass)
    {
      $this->db = new Conexion();
      $this->user = $anUser;
      $this->pass = $aPass;

      $consulta = $this->db->getconectado()->prepare("
        SELECT *
        FROM usuarios
        WHERE nombre=:name;");
      $consulta->bindParam(':name', $this->user);
      $consulta->execute();
      if($consulta->rowCount() === 1){
		        $row = $consulta->fetch(PDO::FETCH_ASSOC);
		        if($row['password'] === $this->pass){
              if($row['nombre'] === 'admin'){
                $_SESSION['user'] = $row['nombre'];
                $_SESSION['admin'] = true;
                $this->esValida = true;
              }else {
                $_SESSION['user'] = $row['nombre'];
                $this->esValida = true;
              }
            }else{
              $this->esValida = false;
            }
      }else {
        $this->esValida = false;
      }
    }

    public function getEsValida(){
      return $this->esValida;
    }
  }
 ?>
