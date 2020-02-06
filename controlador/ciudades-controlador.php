<?php
require_once("modelo/ciudades-modelo.php");

$ciudad=new CiudadesModelo();
$matrizCiudad = $ciudad->getciudades();



require_once("vista/ciudades-view.php");


?>