<?php

class Animais {
    protected $nome;
    protected $grupo;

    public function __construct($nmCientifico) {
        print "Nome Cientifico: {$nmCientifico} <br>\n";
    }

    public function set_nome($nome) {
        $this->nome = $nome;
    }
    public function get_nome() {
        return $this->nome;
    }

    public function set_grupo($grupo) {
        $this->grupo = $grupo;
    }
    public function get_grupo() {
        return $this->grupo;
    }
}
?>