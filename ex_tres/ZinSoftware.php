<?php
class ZinSoftware extends Contabilidade {
    protected $endereco;

    public function __construct($nmEmpresa, $patrimonio, $invest, $recursos, $endereco) {
        parent::__construct($nmEmpresa, $patrimonio, $invest, $recursos);
    }

    public function contrato($nmEmpresa, $patrimonio, $invest, $recursos) {
        print "Contrato de Prestacao de Servicos <br> Contratante: Escritorio de Contabilidade <br> Contratado: {$nmEmpresa} <br> Patrimonio acumulado: {$patrimonio} <br> Investimento Total: {$invest} <br> Total de recursos: {$recursos}.";
    }
}
?>