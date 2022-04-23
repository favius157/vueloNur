<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/Vuelos/ShareKernel/Rules/NotlNull.php";

class NombrePersonaValue {

    private $nombreCompleto = "";

    public function __construct($nombre) {
        $response = new NotlNull($nombre);

        if ($response->isValid()) {

            if (strlen($nombre) < 100) {
                $this->nombreCompleto = $nombre;
            } else {
                echo "Cantidad de caracteres invalida";
            }
        } else {
            echo $response->mensaje;
        }
    }
    
    function getNombre() {
        return $this->nombreCompleto;
    }

}
