<?php

class Mamiferos extends Animais {
    protected $classificacao;
    protected $alimentacao;

    public function __construct($ani) {
        parent::__construct($ani);
    }
    
    public function set_classificacao($classificacao) {
        $this->classificacao = $classificacao;
    }
    public function get_classificacao(){
        return $this->classificacao;
    }

    public function set_alimentacao($alimentacao) {
        $this->alimentacao = $alimentacao;
    }
    public function get_alimentacao(){
        return $this->alimentacao;
    }
}
?>