<?php
	/**
	 * 
	 */
	class ciudadesModelo{
		
		private $db;
		private $ciudades;

		function __construct(){
			require_once("modelo/conexion.php");
			$this->db=Conectar::conexion();
			$this->ciudades=array();
		}

		public function getCiudades(){
			require("paginacion.php");
			$consulta = $this->db->query("SELECT * FROM ciudades");
			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->ciudades[]=$filas;
			}
			return $this->ciudades;
		}

		
	}



?>