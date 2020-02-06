<?php
	/**
	 * 
	 */
	class RutasModelo{
		
		private $db;
		private $rutas;

		function __construct(){
			require_once("modelo/conexion.php");
			$this->db=Conectar::conexion();
			$this->rutas=array();
		}

		public function getRutas(){
			require("paginacion.php");
			$consulta = $this->db->query("SELECT * FROM rutas;");
			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->rutas[]=$filas;
			}
			return $this->rutas;
		}

		
	}



?>