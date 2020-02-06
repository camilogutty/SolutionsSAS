<?php
require_once("modelo/rutas-modelo.php");

$rutas=new RutasModelo();
$matrizRuta = $rutas->getRutas();



require_once("vista/rutas-view.php");


?>