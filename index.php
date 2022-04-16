
<?php

include_once './VueloDomain/Model/Vuelo/Vuelo.php';
include_once './VueloDomain/Model/EncargadoVuelo/EncargadoVuelo.php';
include_once './VueloDomain/Model/Origen/Origen.php';
include_once './VueloDomain/Model/Destino/Destino.php';
include_once './VueloDomain/Model/Mensajeria/Mensajeria.php';

$encargadoVuelo = new EncargadoVuelo("Favio Lopez", "69185369", "+591", 30, "8967304");

$origen1 = new Origen(-80, 90, "10:00");
$destino1 = new Destino(-40, 80, "10:20");
$listaVuelos1 = array();

$nuevoVuelo1 = new Vuelo($encargadoVuelo, $origen1, $destino1);
$listaVuelos[] = $nuevoVuelo1;

$origen2 = new Origen(-80, 90, "10:00");
$destino2 = new Destino(-40, 80, "10:20");
$listaVuelos2 = array();

$nuevoVuelo2 = new Vuelo($encargadoVuelo, $origen2, $destino2);
$listaVuelos[] = $nuevoVuelo2;

$origen3 = new Origen(-80, 90, "10:00");
$destino3 = new Destino(-40, 80, "10:20");
$listaVuelos3 = array();

$nuevoVuelo3 = new Vuelo($encargadoVuelo, $origen3, $destino3);

$listaVuelos[] = $nuevoVuelo3;
$mensajeria = new Mensajeria($listaVuelos);

$mensajeria->enviarListaAeropuerto();

?>
    