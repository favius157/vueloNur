
//const  _privateCrearEncargado = new WeakMap();

class crearEncargadoVueloHandler {
    constructor(encargado) {
        var param = {
            task: "crearEncargado",
            nombre: encargado.getNombreEncargado,
            numero: encargado.getNumeroTelefono,
            edad: encargado.getEdad,
            ci: encargado.getCi
        }

        $.ajax({
            type: 'POST',
            url: "./VueloInfraestructura/Repositorio/EncargadoVueloRepositorio.php",
            data: param,
            beforeSend: function (x) {
                console.log("esperando respuesta");
            }, success: function (data, textStatus, jqXHR) {
                console.log("Encargado creado: "+data);
            }
        })
    }

}
