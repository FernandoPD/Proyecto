<?php
include("conectar.php");
$conectar = conectar();
if (!$conectar) {
    echo json_encode(array("ok"=>false));
} else {
    $identificacion = $_POST["id"];
    $sql = "DELETE FROM contactos WHERE identificacion ='$identificacion'";
    $result = pg_query($conectar,$sql);
    if ($result) {
        echo json_encode(array("ok"=>true,"eliminar"=>true));
    } else {
        echo json_encode(array("ok"=>true,"eliminar"=>false,"numero"=>$tipoId));
    }
    
}
?>