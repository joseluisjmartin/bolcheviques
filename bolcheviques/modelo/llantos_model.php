<?php
	require_once('bolcheviques/modelo/db/conexion.php');

	class Mensajes{
		private $pg;
		private $mensajes;
		private $tabla;
		private $db;

		function __construct($name,$pagina) {
			$this->pg = $pagina;
			$this->tabla = $name;
			$this->db = new Conexion();
			$this->mensajes = array();
			$resultado = $this->db->getconectado()->prepare("SELECT * FROM {$this->tabla};");
			$resultado -> execute();
			while($row = $resultado -> fetch(PDO::FETCH_ASSOC)){
				$this->mensajes[]=$row;
			}
			#$this->db->cerrarConexion();
		}

		public function getMensajes(){
			return $this->mensajes;
		}

		public function publicar($id,$autor,$texto){
			$sentencia = $this->db->getconectado()->prepare("
			INSERT INTO {$this->tabla} (autor, contenido)
			VALUES (:autor,:texto);");
      $sentencia->bindParam(':autor', $autor);
			$sentencia->bindParam(':texto', $texto);
      $sentencia->execute();
			header("Location: index.php?pg={$this->pg}");

		}

		public function actualizar($id,$autor,$texto){
			$sentencia = $this->db->getconectado()->prepare("
			UPDATE {$this->tabla}
			SET contenido=:texto
			WHERE {$this->tabla}_id=:id;");
			$sentencia->bindParam(':id', $id);
			$sentencia->bindParam(':texto', $texto);
      $sentencia->execute();
			header("Location: index.php?pg={$this->pg}");
		}

		public function borrar($id,$autor,$texto){
			$sentencia = $this->db->getconectado()->prepare("
			DELETE FROM {$this->tabla}
			WHERE {$this->tabla}_id=:id;");
			$sentencia->bindParam(':id', $id);
      $sentencia->execute();
			header("Location: index.php?pg={$this->pg}");
		}

	}
?>
