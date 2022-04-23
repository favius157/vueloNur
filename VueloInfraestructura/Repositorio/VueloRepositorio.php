<?php

include_once '../../VueloDomain/Model/Vuelo/Vuelo.php';

switch ($_POST["task"]) {
    case "crearVuelo":

        $nuevoVuelo = new Vuelo($_POST["encargado"], $_POST["origen"], $_POST["destino"]);
        $lista = array();

        $datos["uid"] = $nuevoVuelo->getUid();
        $datos["numeroVuelo"] = $nuevoVuelo->getNumeroVuelo();
        $lista[] = $datos;

        echo json_encode($lista);

        break;

    default:
        break;
}


