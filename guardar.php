<?php
include("conectar.php");
$conectar = conectar();
if (!$conectar) {
    echo json_encode(array("ok"=>false));
} else {
    $identificacion = $_POST["numeroident"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $genero = $_POST["genero"];
    $tipoId = $_POST["tipo"];
    $telefono= $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $sql = "INSERT INTO contactos(identificacion,nombre,apellido,genero,tipo_id,telefono,direccion,correo) VALUES ('$identificacion','$nombre','$apellido','$genero','$tipoId','$telefono','$direccion','$correo')";
    $result = pg_query($conectar,$sql);
    if ($result) {
        echo json_encode(array("ok"=>true,"guardar"=>true));
    } else {
        echo json_encode(array("ok"=>true,"guardar"=>false));
    }
    
}

?>