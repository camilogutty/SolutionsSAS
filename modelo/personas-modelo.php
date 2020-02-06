<?php
	/**
	 * 
	 */
	class personasModelo{
		
		private $db;
		private $personas;

		function __construct(){
			require_once("modelo/conexion.php");
			$this->db=Conectar::conexion();
			$this->personas=array();
		}

		public function getPersonas(){
			require("paginacion.php");
			$consulta = $this->db->query("SELECT Nombre, Apellidos, B.tipoDocumento, Identificacion, Licencia FROM personas A, tiposdocumento B WHERE A.tipoDocumento = B.idTipoDocumento;");
			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->personas[]=$filas;
			}
			return $this->personas;
		}

		
	}



?>