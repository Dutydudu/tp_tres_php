<?php

class ZinMobile extends ZinSoftware {
    public function __construct($nmEmpresa, $patrimonio, $invest, $recursos, $endereco) {
        parent::__construct($nmEmpresa, $patrimonio, $invest, $recursos, $endereco);
    }

    public function declaracao($dt) {
        if($this->patrimonio >= 120000.00) {
            print "A Empresa {$this->nmEmpresa}, declara, por meio deste comunicado, sua falencia no dia {$dt}.";
        } else{
            return false;
        }
    }
}
?>