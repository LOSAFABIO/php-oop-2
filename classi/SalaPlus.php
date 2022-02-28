<?php

require_once __DIR__."/Sala.php";

class SalaPlus extends Sala {
    private $Imax;
    private $effetti4D;

    public function __construct($_Imax, $_effetti4D){
        $this->Imax = $_Imax;
        $this->effetti4D = $_effetti4D;
    }
}


?>