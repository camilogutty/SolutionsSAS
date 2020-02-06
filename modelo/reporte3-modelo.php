<?php
	/**
	 * 
	 */
	class reporte3Modelo{
		
		private $db;
		private $reporte3;

		function __construct(){
			require_once("modelo/conexion.php");
			$this->db=Conectar::conexion();
			$this->reporte3=array();
		}

		public function getreporte3(){
			require("paginacion.php");
			$consulta = $this->db->query("SELECT idVehiculo, Nombre, Apellidos, Identificacion, capacidad, fechaVenSoat, fechaVenTecno FROM vehiculos, personas WHERE vehiculos.idPersonaCargo = personas.idPersona OR (fechaVenSoat < NOW() AND fechaVenTecno < NOW()) ORDER BY fechaVenSoat, fechaVenTecno ASC;");
			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->reporte3[]=$filas;
			}
			return $this->reporte3;
		}

		
	}



?>