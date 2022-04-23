
//const  _privateCrearEncargado = new WeakMap();

class crearVueloHandler {
    constructor(vuelo) {
        var param = {
            task: "crearVuelo",
            numeroVuelo: "numero obtenido del aeropuerto",
            origen: "origen",
            destino: "destino",
            codAvion: "codigo obtenido de microservicio avion",
            tripulantes: "",
            encargado: "encargado",
            millas: 0
        }

        $.ajax({
            type: 'POST',
            url: "./VueloInfraestructura/Repositorio/VueloRepositorio.php",
            data: param,
            beforeSend: function (x) {
                console.log("esperando respuesta");
            }, success: function (data, textStatus, jqXHR) {
                console.log("Vuelo creado: " + data);
            }
        })
    }

}
