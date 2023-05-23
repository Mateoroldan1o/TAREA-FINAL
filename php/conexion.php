<?php

$contraseña = "";
$usuario = "root";
$nombrebd="crudphp";
try {
    $base_de_datos= new PDO('mysql:host=localhost;dbname='.$nombrebd,$usuario,$contraseña);
    /*echo "<script>alert('La conexion se realizco correctamente')</script>";*/

} catch (Exception $e) {
    echo "<script>alert('Ocurrio un problema')</script>".$e->getMessage();
}   

?>