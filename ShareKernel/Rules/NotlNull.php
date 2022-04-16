<?php

class NotlNull {

    private $object = "";
    public $mensaje = "El objeto no puede ser nulo";
    private $flag = true;

    public function __construct($objeto) {
        $this->object = $objeto;
    }

    function isValid() {
        if ($this->object != null) {
            $this->flag = true;
        } else {
            $this->flag = false;
        }

        return $this->flag;
    }

}
