<?php

include_once './VueloDomain/Model/EncargadoVuelo/ValueObjects/NombrePersonaValue.php';
include_once './VueloDomain/Model/EncargadoVuelo/ValueObjects/NumeroTelefonicoValue.php';

class EncargadoVuelo {

    private $uid = null;
    private $nombreEncargado = null;
    private $numeroTelefono = null;
    private $edad = null;
    private $ci = null;

    public function __construct($nombre, $numero, $codPostal, $edad, $ci) {
        $this->uid = uniqid(rand(), true);
        $this->nombreEncargado = new NombrePersonaValue($nombre);
        $this->numeroTelefono = new NumeroTelefonicoValue($codPostal, $numero);
        $this->ci = $ci;
        $this->edad = $edad;
    }

    function getNombreEncargado() {
        return $this->nombreEncargado->getNombre();
    }

}
