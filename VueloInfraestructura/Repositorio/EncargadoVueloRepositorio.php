<?php

include_once '../../VueloDomain/Model/EncargadoVuelo/EncargadoVuelo.php';

switch ($_POST["task"]) {
    case "crearEncargado":

        $nuevoEncargado = new EncargadoVuelo($_POST["nombre"], $_POST["numero"], "+591", $_POST["edad"], $_POST["ci"]);
        $lista = array();

        $datos["uid"] = $nuevoEncargado->getUid();
        $datos["nombre"] = $nuevoEncargado->getNombreEncargado();
        $lista[] = $datos;

        echo json_encode($lista);

        break;

    default:
        break;
}


