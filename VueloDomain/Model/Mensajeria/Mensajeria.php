<?php

class Mensajeria {

    private $listaVuelos = null;

    public function __construct($listaVuelos) {
        $this->listaVuelos = $listaVuelos;
    }
    
    function enviarListaAeropuerto() {
        foreach ($this->listaVuelos as $lista) {
            echo $lista->getNumeroVuelo()." enviado <br/>";
        }
    }

}
