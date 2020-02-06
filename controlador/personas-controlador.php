<?php
require_once("modelo/personas-modelo.php");

$persona=new PersonasModelo();
$matrizPersona = $persona->getPersonas();



require_once("vista/personas-view.php");


?>