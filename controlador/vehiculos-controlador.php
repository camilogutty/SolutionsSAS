<?php
require_once("modelo/vehiculos-modelo.php");

$vehiculo=new VehiculosModelo();
$matrizVehiculo = $vehiculo->getVehiculos();



require_once("vista/vehiculos-view.php");


?>