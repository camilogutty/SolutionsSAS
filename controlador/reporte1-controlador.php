<?php
require_once("modelo/reporte1-modelo.php");

$reporte1=new reporte1Modelo();
$matrizReporte1 = $reporte1->getreporte1();



require_once("vista/reporte1-view.php");


?>