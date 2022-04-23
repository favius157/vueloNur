<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/Vuelos/VueloDomain/Model/Coordenadas/Coordenadas.php';

class Destino {

    private $uid = null;
    private $coordenada = null;
    private $horaLlegada = null;

    public function __construct($lat, $long, $horaLlegada) {
        $this->uid = uniqid(rand(), true);
        $this->coordenada = new Coordenadas($lat, $long);
        $this->horaLlegada = $horaLlegada;
    }

    function getCoordenadas() {
        return $this->coordenada;
    }

    function getHorallegada() {
        return $this->horaLlegada;
    }

}
