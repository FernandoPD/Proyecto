<?php
include("conectar.php");

$conec = conectar();
if (!$conec) {
    echo json_encode(array("ok"=>false));
} else {
    $sql = "SELECT * FROM contactos";
    $result = pg_query($conec,$sql);
    $contactos = array();
    $cont=0;
    while($row = pg_fetch_row($result)){
        $contactos[$cont] = array("identificacion"=>$row[0],
                            "nombre"=>$row[1],
                            "apellido"=>$row[2],
                            "genero"=>$row[3],
                            "tipoId"=>$row[4],
                            "telefono"=>$row[5],
                            "direccion"=>$row[6],
                            "correo"=>$row[7]);
        $cont++;
    }
    if ($result) {
        pg_close($conectar);
        echo json_encode(array("ok"=>true,"listar"=>true,"contactos"=>$contactos));
    } else {
        pg_close($conectar);
        echo json_encode(array("ok"=>true,"listar"=>false));
    }
}
?>