<?php

class Vuelo {

    private $uid = "";
    private $numeroVuelo = "";
    private $origen = "";
    private $destino = "";
    private $codAvion = "";
    private $tripulantes = array();
    private $encargadoVuelos;
    private $millas = 0;
    private $flag = true;

    public function __construct($encargado, $origen, $destino) {
        $this->uid = uniqid(rand(), true);
        $this->numeroVuelo = "V-" . $this->uid;
        $this->setOrigen($origen);
        $this->setDestino($destino);
        $this->encargadoVuelos = $encargado;
        $this->obtenerTripulacionDisponible();
        //$this->calcularMillas($origen, $destino);
    }

    function crearVuelo($origen, $destino, $codAvion, $tripulantes, $usuarioCreador) {
        
    }
    
    function getUid() {
        return $this->uid;
    }

    function getNumeroVuelo() {
        return $this->numeroVuelo;
    }

    function setOrigen($origen) {
        $this->origen = $origen;
    }

    function setDestino($destino) {
        $this->destino = $destino;
    }

    function obtenerAvionDisponible() {
        $this->codAvion = rand();
    }

    function obtenerTripulacionDisponible() {
        for ($i = 0; $i < 3; $i++) {
            $this->agregarTripulante("Tripulante N° " . ($i + 1));
        }

        return $this->tripulantes;
    }

    function agregarTripulante($tripulante) {
        $this->tripulantes[] = $tripulante;
    }

    function calcularMillas($origen, $destino) {


        $theta = $origen->getCoordenadas()->getLongitud() - $destino->getCoordenadas()->getLongitud();
        $dist = sin(deg2rad($origen->getCoordenadas()->getLatitud())) * sin(deg2rad($destino->getCoordenadas()->getLatitud())) + cos(deg2rad($origen->getCoordenadas()->getLatitud())) * cos(deg2rad($destino->getCoordenadas()->getLatitud())) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper("M");
        $this->millas = $miles;
        //return $miles;
//        if ($unit == "K") {
//            return ($miles * 1.609344);
//        } else if ($unit == "N") {
//            return ($miles * 0.8684);
//        } else {
//            
//        }
    }

    function getMillas() {
        return $this->millas;
    }

    function mostrarTripulantes() {
        return $this->tripulantes;
    }

}
