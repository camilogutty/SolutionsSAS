<?php
/**
 * 
 */
class Conectar{
	public static function conexion(){
		try{
			$conexion = new PDO("mysql:host=localhost; dbname=solutionsa","root","adminadmin");
			
			$conexion -> exec("SET CHARACTER SET UTF8");
		}catch(Exception $e){
			die("ERROR" . $e->getMessage());
			echo "Linea de Error " . $e->getLine;
		}
		return $conexion;
	}
}





?>