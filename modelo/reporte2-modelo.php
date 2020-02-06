<?php
	/**
	 * 
	 */
	class reporte2Modelo{
		
		private $db;
		private $reporte2;

		function __construct(){
			require_once("modelo/conexion.php");
			$this->db=Conectar::conexion();
			$this->reporte2=array();
		}

		public function getreporte2(){
			require("paginacion.php");
			$consulta = $this->db->query("SELECT A.VigasAcero, A.Arena, A.Cemento, A.Ladrillo, C.ciudad, B.distancia, ((A.VigasAcero + A.Arena + A.Cemento + A.Ladrillo) * 800000 * B.distancia/5) as costo from Rutas A, trayectos B, ciudades c WHERE A.idTrayecto= B.idTrayecto AND B.ciudadDestino = C.idCiudad;");
			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->reporte2[]=$filas;
			}
			return $this->reporte2;
		}

		
	}



?>