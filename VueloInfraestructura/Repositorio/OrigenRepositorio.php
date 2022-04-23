<?php

include_once '../../VueloDomain/Model/Origen/Origen.php';

switch ($_POST["task"]) {
    case "crearOrigen":

        $nuevoOrigen = new Origen($_POST["latitud"], $_POST["longitud"], $_POST["horaSalida"]);
        $lista = array();

        $datos["coordenadas"] = $nuevoOrigen->getCoordenadas()->getLatitud() . ' ' . $nuevoOrigen->getCoordenadas()->getLongitud();
        $datos["horaSalida"] = $nuevoOrigen->getHoraSalida();
        $lista[] = $datos;

        echo json_encode($lista);

        break;

    default:
        break;
}


