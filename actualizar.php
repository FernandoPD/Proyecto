<?php 
include("conectar.php");
$conec = conectar();
$identificacion = $_POST["identi"];
$sql = "SELECT * FROM contactos WHERE identificacion='$identificacion'";
$result = pg_query($conec,$sql);
pg_close($conec);
$contacto = pg_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Proyecto Redes - Actualizar</title>
</head>
<body>
<div class="container-fluid" style="margin: 10px">
    <form action="modificar.php" method="post">
        <div class="row">
            <div class="col-md-7" style="margin: 0 auto">
                <div style="border:solid 2px blue;
                    border-radius: 5px">
                    <div class="row">
                        <div class="col-md-6 offset-md-1 ">
                            <h2>Actualizar Contacto</h2>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <label>Nombre</label>
                        </div>
                        <div class="col-md-5">
                            <label>Apellido</label>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <input name="nombre" class="form-control" type="text" value="<?php echo $contacto[1];?>">
                        </div>
                        <div class="col-md-5 ">
                            <input name="apellido" class="form-control" type="text"
                            value="<?php echo $contacto[2];?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <label>Genero</label>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <select name="genero" class="form-control">
                                <option value="Femenino" <?php if ($contacto[3]=="Femenino"){echo "selected";}?>>F</option>
                                <option value="Masculino"<?php if ($contacto[3]=="Masculino"){echo "selected";}?>>M</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <label>Identificacion</label>
                        </div>
                        <div class="col-md-5">
                            <label>Tipo</label>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <input name="identificacion" class="form-control" type="text"
                            value="<?php echo $contacto[0];?>">
                        </div>
                        <div class="col-md-5">
                            <div class="col-md-3">
                                <input name="tipo" type="radio" name="ident" value="C.C" <?php if ($contacto[4]=="C.C"){echo "checked";}?>>CC
                            </div>
                            <div class="col-md-3">
                                <input name="tipo" type="radio" name="ident" value="T.I"<?php if ($contacto[4]=="T.I"){echo "checked";}?>>TI
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <label>Telefono</label>
                        </div>
                        <div class="col-md-5">
                            <label>Direccion</label>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <input name="telefono" class="form-control" type="number"
                            value="<?php echo $contacto[5];?>">
                        </div>
                        <div class="col-md-5">
                            <input name="direccion" class="form-control" type="text"
                            value="<?php echo $contacto[6];?>">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <label>Correo</label>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-5 offset-md-1">
                            <input name="correo" class="form-control" type="email" value="<?php echo $contacto[7];?>" placeholder="Email">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-6 offset-md-8">
                            <button class="btn btn-secondary">Cancelar</button>
                            <button class="btn btn-success">Actualizar</button>
                        </div>
                    </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>