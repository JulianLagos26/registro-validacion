<?php 

class Parada {

    private $codigo;

    private $ciudad;

    private $direccion;

    public function __construct($codigo, $ciudad, $direccion)
    {
      $this->setCodigo($codigo);
      $this->setCiudad($ciudad);
      $this->setDireccion($direccion);
    }

    public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function getCiudad(){
		return $this->ciudad;
	}

	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}
}