<?php
function conectar(){
    $conexion = pg_connect("host=localhost user=postgres port=5432 dbname=proyecto_redes password=123456");
    if(!$conexion){
        return false;
    }
    return $conexion;
}
?>