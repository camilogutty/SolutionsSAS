<?php
require_once("modelo/reporte2-modelo.php");

$reporte2=new reporte2Modelo();
$matrizReporte2 = $reporte2->getreporte2();



require_once("vista/reporte2-view.php");


?>