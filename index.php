
<?php
//include_once './VueloDomain/Model/Vuelo/Vuelo.php';
//include_once './VueloDomain/Model/EncargadoVuelo/EncargadoVuelo.php';
//include_once './VueloDomain/Model/Origen/Origen.php';
//include_once './VueloDomain/Model/Destino/Destino.php';
//include_once './VueloDomain/Model/Mensajeria/Mensajeria.php';
////creacion de responsable de vuelos
//$encargadoVuelo = new EncargadoVuelo("Favio Lopez", "69185369", "+591", 30, "8967304");
//$listaVuelos = array();
//
////primer vuelo creado
//$origen1 = new Origen(-80, 90, "10:00");
//$destino1 = new Destino(-40, 80, "10:20");
//$nuevoVuelo1 = new Vuelo($encargadoVuelo, $origen1, $destino1);
//$listaVuelos[] = $nuevoVuelo1;
//
////segundo vuelo creado
//$origen2 = new Origen(-80, 90, "10:00");
//$destino2 = new Destino(-40, 80, "10:20");
//$nuevoVuelo2 = new Vuelo($encargadoVuelo, $origen2, $destino2);
//$listaVuelos[] = $nuevoVuelo2;
//
////tercer vuelo creado
//$origen3 = new Origen(-80, 90, "10:00");
//$destino3 = new Destino(-40, 80, "10:20");
//$nuevoVuelo3 = new Vuelo($encargadoVuelo, $origen3, $destino3);
//$listaVuelos[] = $nuevoVuelo3;
//
////envio de vuelos a aeropuerto
//$mensajeria = new Mensajeria($listaVuelos);
//
//$mensajeria->enviarListaAeropuerto();
?>

<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hello world</title>
    </head> 
    <body>
        <script type="text/javascript" src="VueloAplication/jquery.js"></script>        
        <script type="text/javascript" src="VueloAplication/dto/EncargadoVuelo.js"></script>
        <script type="text/javascript" src="VueloAplication/UseCase/Comand/crearEncargadoVuelo.js"></script>
        <script type="text/javascript" src="VueloAplication/UseCase/Comand/CrearEncargadoVueloHandler.js"></script>
        <!-- Coordenadas -->
        <script type="text/javascript" src="VueloAplication/dto/Coordenadas/Coordenadas.js"></script>

        <!-- Origen -->
        <script type="text/javascript" src="VueloAplication/dto/Coordenadas/Origen.js"></script>
        <script type="text/javascript" src="VueloAplication/UseCase/Comand/crearOrigen.js"></script>
        <script type="text/javascript" src="VueloAplication/UseCase/Comand/CrearOrigenHandler.js"></script>
        <!-- Destino -->
        <script type="text/javascript" src="VueloAplication/dto/Coordenadas/Destino.js"></script>
        <script type="text/javascript" src="VueloAplication/UseCase/Comand/crearDestino.js"></script>
        <script type="text/javascript" src="VueloAplication/UseCase/Comand/CrearDestinoHandler.js"></script>
        <!-- Vuelo -->
        <script type="text/javascript" src="VueloAplication/dto/Vuelo.js"></script>
        <script type="text/javascript" src="VueloAplication/UseCase/Comand/crearVuelo.js"></script>
        <script type="text/javascript" src="VueloAplication/UseCase/Comand/CrearVueloHandler.js"></script>

        <script type="text/javascript" src="VueloAplication/dto/Vuelo.js"></script>
        <script>
            //Crear nuevo encargado de vuelo
            const crearEncargadoVuelo = new crearEncargado();
            crearEncargadoVuelo.crear(new EncargadoVuelo("Favio Lopez", 69185369, 30, "8967304"));

            //Crear origen
            const nuevoOrigen = new crearOrigen();
            nuevoOrigen.crear(new Origen('-10', '10', '10:00'));

            //Crear destino
            const nuevoDestino = new crearDestino();
            nuevoDestino.crear(new Destino('-15', '15', '10:20'));

            //Crear vuelo
            const nuevoVuelo = new crearVuelo();
            nuevoVuelo.crear(new Vuelo(new Origen('-10', '10', '10:00'), new Destino('-15', '15', '10:20'), new EncargadoVuelo("Favio Lopez", 69185369, 30, "8967304")));




        </script>
    </body>
</html>

