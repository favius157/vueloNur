<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/Vuelos/VueloDomain/Model/Coordenadas/Coordenadas.php';

class Origen {

    private $uid = null;
    private $coordenada = null;
    private $horaSalida = null;

    public function __construct($lat, $long, $horaSalida) {
        $this->uid = uniqid(rand(), true);
        $this->coordenada = new Coordenadas($lat, $long);
        $this->horaSalida = $horaSalida;
    }

    function getCoordenadas() {
        return $this->coordenada;
    }

    function getHoraSalida() {
        return $this->horaSalida;
    }

}
