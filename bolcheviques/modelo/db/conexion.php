<?php

	class Conexion{#no hay que poner parentesis en blanco para las clases

		private $conectado;#para que se detecte una variable como atributo de clase hay que especificar la visibilidad

		public function __construct() {

			require_once('bolcheviques/modelo/db/parametros.php');#el require esta aqui porque las funciones tienen scope unico

			try{

				$this->conectado = new PDO('mysql:host=' . $hostname . ';dbname=' .
						$database . ';charset=utf8', $username, $password);

			} catch (PDOException $e) {

				die($e);

			}
		}

		public function getconectado(){
			return $this->conectado;
		}

		public function cerrarConexion(){
			$this->conectado = null;
		}

	}
?>
