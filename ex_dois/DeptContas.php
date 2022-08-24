<?php
class DeptContas extends EscritorioContabi{
	
	public function __construct($ativos, $passivos, $saldo){
		parent::__construct($ativos, $passivos, $saldo);
	}
	
	public function pgConta($valor){
		if ($this->saldo >= $valor){
			$this->passivos -= $valor;
			$this->saldo -= $valor;		
		}
		else {
			return false;
		}
		return true;
	}
	
	public function recebBens($valor){
		$this->saldo += $valor;
		$this->ativos -= $valor;
	}
	
}
?>
