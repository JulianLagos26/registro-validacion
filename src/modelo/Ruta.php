<?php 

class Ruta {
    private $origen;

    private $destino;

    private $cantidadKm;

    private $tiempoViaje;

    public function __construct($origen, $destino, $cantidadKm, $tiempoViaje)
    {
      $this->setOrigen($origen);
      $this->setDestino($destino);
      $this->setCantidadKm($cantidadKm);
      $this->setTiempoViaje($tiempoViaje);
    }

    public function getOrigen(){
		return $this->origen;
	}

	public function setOrigen($origen){
		$this->origen = $origen;
	}

	public function getDestino(){
		return $this->destino;
	}

	public function setDestino($destino){
		$this->destino = $destino;
	}

	public function getCantidadKm(){
		return $this->cantidadKm;
	}

	public function setCantidadKm($cantidadKm){
		$this->cantidadKm = $cantidadKm;
	}

	public function getTiempoViaje(){
		return $this->tiempoViaje;
	}

	public function setTiempoViaje($tiempoViaje){
		$this->tiempoViaje = $tiempoViaje;
	}
}