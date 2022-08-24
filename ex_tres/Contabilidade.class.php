<?php

abstract class Contabilidade {
    protected $nmEmpresa;
    protected $invest;
    protected $recursos;
    protected $patrimonio;

    public function __construct($nmEmpresa, $invest, $recursos, $patrimonio) {
        $this->nmEmpresa = $nmEmpresa;
        $this->patrimonio = $patrimonio;
        if ($invest >= 0) {
            $this->intvest = $invest;
        } else {
            return false;
        }
        $this->recursos = $recursos;
    }

    public function investir($quantia) {
        $this->patrimonio += ($quantia * 2.60);
    }

    abstract function contrato($nmEmpresa, $patrimonio, $invest, $recursos);
}

?>