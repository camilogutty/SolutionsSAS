<?php
	/**
	 * 
	 */
	class reporte1Modelo{
		
		private $db;
		private $reporte1;

		function __construct(){
			require_once("modelo/conexion.php");
			$this->db=Conectar::conexion();
			$this->reporte1=array();
		}

		public function getreporte1(){
			require("paginacion.php");
			$consulta = $this->db->query("SELECT C.Nombre, C.Apellidos, C.Identificacion, A.VigasAcero, A.Arena, A.Cemento, A.Ladrillo FROM Rutas A, vehiculos B, personas C WHERE idEstado = 1 AND B.idPersonaCargo = C.idPersona AND A.idVehiculo = B.idVehiculo;");
			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->reporte1[]=$filas;
			}
			return $this->reporte1;
		}

		
	}



?>