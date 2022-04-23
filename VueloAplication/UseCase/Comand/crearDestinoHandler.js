
//const  _privateCrearEncargado = new WeakMap();

class crearDestinoHandler {
    constructor(destino) {
        var param = {
            task: "crearDestino",
            latitud: destino.getCoordenadas.getLatitud,
            longitud: destino.getCoordenadas.getLongitud,
            llegada: destino.getCoordenadas.getHoraLlegada
        }

        $.ajax({
            type: 'POST',
            url: "./VueloInfraestructura/Repositorio/DestinoRepositorio.php",
            data: param,
            beforeSend: function (x) {
                console.log("esperando respuesta");
            }, success: function (data, textStatus, jqXHR) {
                console.log("dato ingresado: " + data);
            }
        })
    }

}
