<?php

include_once './ShareKernel/Rules/NotlNull.php';

class NumeroTelefonicoValue {

    private $codPostal = null;
    private $numero = null;

    public function __construct($codPostal, $numero) {
        $response = new NotlNull($codPostal);
        $response1 = new NotlNull($numero);

        if ($response->isValid()) {
            if ($codPostal[0] == "+") {
                if ($response1->isValid()) {
                    $this->codPostal = $codPostal;
                    $this->numero = $numero;
                } else {
                    echo $response1->mensaje;
                }
            } else {
                echo "Codigo postal debe llevar el + adelante";
            }
        } else {
            echo $response->mensaje;
        }
    }

}
