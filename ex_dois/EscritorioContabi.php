<?php
abstract class EscritorioContabi{
	
	protected $ativos;
	protected $passivos;
	protected $saldo;
	
	public function __construct($ativos, $passivos, $saldo){
		$this->ativos = $ativos;
		$this->passivos = $passivos;
		if ($saldo >= 0){
			$this->saldo = $saldo;
		}
	}

	public function getPassivos(){
		return $this->passivos;
	}
	
	public function setPassivos($passivos){
		$this->passivos = $passivos;
	}

	public function getInfo(){
		return "Sobre a Empresa <br> Saldo atual: R$ {$this->saldo} <br> Ativos atuais: R$ {$this->ativos} <br> Passivos atuais: R$ {$this->passivos} <br>\n ";
	}
	
	public function getSaldo(){
		return $this->saldo;
	}
	
	public function getAtivos(){
		return $this->ativos;
	}

	public function setAtivos($ativos){
		$this->ativos = $ativos;
	}
	
	abstract function pgConta($valor);
	abstract function recebBens($valor);
}
?>