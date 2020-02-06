<?php
require_once("modelo/reporte3-modelo.php");

$reporte3=new reporte3Modelo();
$matrizReporte3 = $reporte3->getreporte3();



require_once("vista/reporte3-view.php");


?>