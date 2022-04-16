<?php

class LongitudValue {

    private $longitud = null;
    private $flag = true;

    public function __construct($long) {
        if ($long > -180 && $long < 180) {
            $this->longitud = $long;
        } else {
            echo "Longitud invalida";
        }
    }

    function getLongitud() {
        return $this->longitud;
    }

}
