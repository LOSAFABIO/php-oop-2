<?php

require_once __DIR__."/Sala.php";

class SalaPlus extends Sala {
    protected $effetti4D;

    public function __construct($_nome, $_capienza, $_effetti4D = []){
        parent::__construct($_nome, $_capienza);
        $this->effetti4D = $_effetti4D;
    }
    public function getInfo(){
        return "Nome: {$this->nome} Capienza: {$this->capienza} Effetto: " .implode(",",$this->effetti4D);
    }
}


?>