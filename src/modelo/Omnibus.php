<?php 

class Ruta {
    private $matricula;

    private $cantidadAsientoss;

    private $descripcion;

    public function __construct($matricula, $cantidadAsientoss, $descripcion,)
    {
      $this->setMatricula($matricula);
      $this->setCantidadAsientoss($cantidadAsientoss);
      $this->setDescripcion($descripcion);
    }

    public function getMatricula(){
		return $this->matricula;
	}

	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	public function getCantidadAsientoss(){
		return $this->cantidadAsientoss;
	}

	public function setCantidadAsientoss($cantidadAsientoss){
		$this->cantidadAsientoss = $cantidadAsientoss;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

}