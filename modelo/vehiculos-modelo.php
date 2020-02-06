<?php
	/**
	 * 
	 */
	class vehiculosModelo{
		
		private $db;
		private $vehiculos;

		function __construct(){
			require_once("modelo/conexion.php");
			$this->db=Conectar::conexion();
			$this->vehiculos=array();
		}

		public function getVehiculos(){
			require("paginacion.php");
			$consulta = $this->db->query("SELECT idVehiculo, Identificacion, capacidad, fechaVenSoat, fechaVenTecno FROM vehiculos, personas WHERE idPersonaCargo = idPersona;");
			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->vehiculos[]=$filas;
			}
			return $this->vehiculos;
		}

		
	}



?>