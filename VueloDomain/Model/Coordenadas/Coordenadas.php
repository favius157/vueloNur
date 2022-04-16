<?php

include_once 'ValueObjects/LatitudValue.php';
include_once 'ValueObjects/LongitudValue.php';


class Coordenadas {

    private $latitud = "";
    private $longitud = "";

    public function __construct($lat, $long) {
        $this->latitud = new LatitudValue($lat);
        $this->longitud = new LongitudValue($long);
    }

    function getLatitud() {
        return $this->latitud->getLatitud();
    }

    function getLongitud() {
        return $this->longitud->getLongitud();
    }

}
