<?php
include_once("conexion.php");

$sentencia=$base_de_datos->query("select * from personas;");
$personas=$sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($personas);

?>

