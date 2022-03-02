<?php

require_once __DIR__."/Film.php";
require_once __DIR__."/Programmazione.php";
require_once __DIR__."/Sala.php";

class Spettacolo {
    protected $film;
    protected $programmazione;
    // protected $sala;

    public function __construct($_film, $_programmazione){
        $this->film = $_film;
        $this->programmazione = $_programmazione;
        // $this->sala = $sala;
    }
    public function getTitle(){
        return $this->film->getTitle();
    }
    public function getGiorno(){
        return $this->programmazione->getGiorno();
    }
    public function getSala(){
        return $this->sala->getSala();
    }



}

?>