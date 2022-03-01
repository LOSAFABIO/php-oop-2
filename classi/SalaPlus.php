<?php

require_once __DIR__."/Sala.php";

class SalaPlus extends Sala {
    private $effetti4D;

    public function __construct($_nome, $_capienza, $_effetti4D){
        parent::__construct($_nome, $_capienza);
        $this->effetti4D = $_effetti4D;
    }
}


?>