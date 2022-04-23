<?php

include_once '../../VueloDomain/Model/Destino/Destino.php';

switch ($_POST["task"]) {
    case "crearDestino":

        $nuevoDestino = new Destino($_POST["latitud"], $_POST["longitud"], $_POST["llegada"]);
        $lista = array();

        $datos["coordenadas"] = $nuevoDestino->getCoordenadas()->getLatitud() . ' ' . $nuevoDestino->getCoordenadas()->getLongitud();
        $datos["horaLlegada"] = $nuevoDestino->getHorallegada();
        $lista[] = $datos;

        echo json_encode($lista);

        break;

    default:
        break;
}


