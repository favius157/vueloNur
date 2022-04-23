
//const  _privateCrearEncargado = new WeakMap();

class crearOrigenHandler {
    constructor(origen) {
        //alert(origen.getCoordenadas.getLongitud);
        var param = {
            task: "crearOrigen",
            latitud: origen.getCoordenadas.getLatitud,
            longitud: origen.getCoordenadas.getLongitud,
            horaSalida: origen.getHoraSalida
        }

        $.ajax({
            type: 'POST',
            url: "./VueloInfraestructura/Repositorio/OrigenRepositorio.php",
            data: param,
            beforeSend: function (x) {
                console.log("esperando respuesta");
            }, success: function (data, textStatus, jqXHR) {
                console.log("dato ingresado: " + data);
            }
        })
    }

}
