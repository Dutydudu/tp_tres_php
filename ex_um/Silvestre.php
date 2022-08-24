<?php

class Silvestre extends Mamiferos {
    protected $habitat;
    protected $manso;

    public function __construct($mam) {
        parent::__construct($mam);
    }

    public function set_habitat($habitat) {
        $this->habitat = $habitat;
    }
    public function get_habitat() {
        return $this->habitat;
    }

    public function set_manso($manso) {
        $this->manso = $manso;
    }
    public function get_manso(){
        $this->manso;
        if ($this->manso == True)
            return "Sim";
        else return "Nao";
    }
}
?>