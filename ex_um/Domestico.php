<?php
class Domestico extends Mamiferos {
    protected $raca;
    protected $apelido;

    public function __construct($mam) {
        parent::__construct($mam);
    }

    public function set_raca($raca) {
        $this->raca = $raca;
    }
    public function get_raca() {
        return $this->raca;
    }

    public function set_apelido($apelido) {
        $this->apelido = $apelido;
    }
    public function get_apelido() {
        return $this->apelido;
    }
}
?>