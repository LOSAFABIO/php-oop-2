<?php

require_once __DIR__."/Programmazione.php";
class Sala {
    private $nome;
    private $capienza;

    public function __construct($_nome, $_capienza){
        $this->nome = $_nome;
        $this->capienza = $_capienza;

    }
    public function getInfo(){
        return [
            $this->$nome,
            $this->$capienza 
        ];
    }
}

?>