<?php 

class Funcionario {

    private $cedula;

    private $nombre;

    private $direccion;

    private $salario;

    private $telefnono; 

    private $email;


    public function __construct($cedula, $nombre, $direccion, $salario , $telefnono, $email)
    {
        $this->setCedula($cedula);
        $this->setNombre($nombre);
        $this->setDireccion($direccion);
        $this->setSalario($salario);
        $this->setTelefnono($telefnono);
        $this->setEmail($email);
    }

	public function getCedula(){
		return $this->cedula;
	}

	public function setCedula($cedula){
		$this->cedula = $cedula;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getSalario(){
		return $this->salario;
	}

	public function setSalario($salario){
		$this->salario = $salario;
	}

	public function getTelefnono(){
		return $this->telefnono;
	}

	public function setTelefnono($telefnono){
		$this->telefnono = $telefnono;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}


}