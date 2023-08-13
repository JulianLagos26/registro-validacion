<?php

class Boleto {
    private $codigo;

    private $inicio;

    private $fin; 

    private $parada;

    private $numAsiento;

    private $fechaHora;

    private $precio;

    public function __construct($codigo, $inicio, $fin, $parada, $numAsiento, $fechaHora, $precio)
    {
        $this->setCodigo($codigo);
        $this->setInicio($inicio);
        $this->setFin($fin);
        $this->setParada($parada);
        $this->setNumAsiento($numAsiento);
        $this->setFechaHora($fechaHora);
        $this->setPrecio($precio);
    }

    public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function getInicio(){
		return $this->inicio;
	}

	public function setInicio($inicio){
		$this->inicio = $inicio;
	}

	public function getFin(){
		return $this->fin;
	}

	public function setFin($fin){
		$this->fin = $fin;
	}

	public function getParada(){
		return $this->parada;
	}

	public function setParada($parada){
		$this->parada = $parada;
	}

	public function getNumAsiento(){
		return $this->numAsiento;
	}

	public function setNumAsiento($numAsiento){
		$this->numAsiento = $numAsiento;
	}

	public function getFechaHora(){
		return $this->fechaHora;
	}

	public function setFechaHora($fechaHora){
		$this->fechaHora = $fechaHora;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio($precio){
		$this->precio = $precio;
	}


}