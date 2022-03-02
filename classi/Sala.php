<?php

require_once __DIR__."/Programmazione.php";
class Sala {
    protected $nome;
    protected $capienza;

    public function __construct($_nome, $_capienza){
        $this->nome = $_nome;
        $this->capienza = $_capienza;

    }
    public function getInfo(){
        return "Nome: {$this->nome} Capienza: {$this->capienza}"; 
    }

    public function getTotCapienza(){
        return $this->capienza;
    }
    public function getSala(){
        return $this->nome;
    }


}

?>