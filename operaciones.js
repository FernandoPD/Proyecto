angular.module("app_contactos", []).controller("controlador", function ($scope) {
    $scope.contactos = {};
    $scope.guardar = false;

    $.ajax({
        type: "POST",
        url: "listar.php",
        data: {
            proceso: "listar"
        },
        success: function (data) {
            data = JSON.parse(data);
            if (data.ok) {
                if(data.listar){
                    var contactos = data.contactos;
                    $scope.contactos = contactos;
                    $scope.$applyAsync();
                }else alert("error al listar los contactos");
            } else {
                alert("erro al conectar a la base de datos");
            }
        }
    });
    $scope.guardar_contactos = function () {

        $.ajax({
            url: "guardar.php",
            type: "POST",
            data: {
                nombre: $scope.contactos.nombre,
                apellido: $scope.contactos.apellido,
                genero: $scope.contactos.genero,
                numeroident: $scope.contactos.identificacion,
                tipo: $scope.contactos.tipo,
                telefono: $scope.contactos.telefono,
                direccion: $scope.contactos.direccion,
                correo: $scope.contactos.correo
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.ok) {
                    if (data.guardar) {
                        alert("El contacto ha sido guardado sastifactoriamente ");
    
                    } else {
                        alert("No se pudo guardar el contacto");
                    }
                } else {
                    alert("la conexion ha fallado");
                }
            }
        });
        $scope.contactos.push({nombre: $scope.contactos.nombre, apellido: $scope.contactos.apellido, identificacion: $scope.contactos.identificacion, telefono: $scope.contactos.telefono, correo: $scope.contactos.correo});
    };

    $scope.borrar = function (event, identi) {

        $.ajax({
            url: "eliminar.php",
            type: "POST",
            data: {
                proceso: "eliminar",
                id: identi

            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.eliminar) {
                    angular.element(event.target).parent().parent().parent().parent().remove();
                    alert("Se ha eliminado el contacto");
                    $scope.$applyAsync();

                } else {
                    alert("No se pudo eliminar el contacto");
                }
            }
        });


    };

    $scope.ocultar = function (event) {
        $objeto = angular.element(event.target).parent().parent().parent().parent();
        $objeto2 = $objeto.find('#datos');
        if ($objeto2.is(":visible"))
            $objeto2.hide();
        else
            $objeto2.show();
    };
});