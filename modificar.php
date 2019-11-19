<?php
include("conectar.php");
$conectar = conectar();
$identificacion = $_POST["identificacion"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$genero = $_POST["genero"];
$tipoId = $_POST["tipo"];
$telefono= $_POST["telefono"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$sql = "UPDATE contactos SET identificacion ='$identificacion',nombre='$nombre',apellido='$apellido',genero='$genero',tipo_id='$tipoId',telefono='$telefono',direccion='$direccion',correo='$correo' WHERE identificacion='$identificacion'";
$result = pg_query($conectar,$sql);
header("Location: index.html");
exit();
?>