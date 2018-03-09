<?php
	require_once('bolcheviques/modelo/db/conexion.php');

	class Noticias{
		private $pg;
		private $noticias;
		private $tabla;
		private $db;

		function __construct($name,$pagina) {
			$this->pg = $pagina;
			$this->tabla = $name;
			$this->db = new Conexion();
			$this->noticias = array();
			$resultado = $this->db->getconectado()->prepare("SELECT * FROM {$this->tabla};");
			$resultado -> execute();
			while($row = $resultado -> fetch(PDO::FETCH_ASSOC)){
				$this->noticias[]=$row;
			}
			#$this->db->cerrarConexion();
		}

		public function getNoticias(){
			return $this->noticias;
		}

		public function getNombre(){
			return $this->tabla;
		}

		public function publicar($id,$titulo,$texto,$fichero){
			$sentencia = $this->db->getconectado()->prepare("
			INSERT INTO {$this->tabla} (titulo, contenido, adjunto)
			VALUES (:titulo,:texto,:adjunto);");
      $sentencia->bindParam(':titulo', $titulo);
			$sentencia->bindParam(':texto', $texto);
			$sentencia->bindParam(':adjunto', $fichero);
      $sentencia->execute();
			header("Location: index.php?pg={$this->pg}");

		}

		public function actualizar($id,$titulo,$texto,$fichero){
			$sentencia = $this->db->getconectado()->prepare("
			UPDATE {$this->tabla}
			SET titulo=:titulo, contenido=:texto, adjunto=:adjunto
			WHERE {$this->tabla}_id=:id;");
			$sentencia->bindParam(':id', $id);
      $sentencia->bindParam(':titulo', $titulo);
			$sentencia->bindParam(':texto', $texto);
			$sentencia->bindParam(':adjunto', $fichero);
      $sentencia->execute();
			header("Location: index.php?pg={$this->pg}");
		}

		public function borrar($id,$titulo,$texto,$fichero){
			$sentencia = $this->db->getconectado()->prepare("
			DELETE FROM {$this->tabla}
			WHERE {$this->tabla}_id=:id;");
			$sentencia->bindParam(':id', $id);
      $sentencia->execute();
			header("Location: index.php?pg={$this->pg}");
		}

	}
?>
