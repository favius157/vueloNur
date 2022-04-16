<?php

include_once './ShareKernel/Rules/NotlNull.php';

class LatitudValue {

    private $latitud = null;

    public function __construct($lat) {

        $response = new NotlNull($lat);

        if ($response->isValid()) {
            if ($lat > -90 && $lat < 90) {
                $this->latitud = $lat;
            } else {
                echo "Latitud invalida";
            }
        }else{
            echo $response->mensaje;
        }
    }

    function getLatitud() {
        return $this->latitud;
    }

}
