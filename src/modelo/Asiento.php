<?php

class Asiento {
    protected $numero;
    private $estado;

    public function __construct($numero, $estado)
    {
        $this->setNumero($numero); 
        $this->setEstado($estado);
    }

    public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}



} 

