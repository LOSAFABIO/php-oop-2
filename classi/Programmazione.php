<?php

class Programmazione {
    private $data;
    private $orario;

    public function __construct($_data, $_orario){
        $this->data = $_data;
        $this->orario = $_orario;
    }
    public function getGiorno(){
        return $this->data;
    }

}

?>