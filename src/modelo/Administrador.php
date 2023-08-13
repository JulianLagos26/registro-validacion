<?php 

class Administrador extends Funcionario {

    private $sector;

    private $contrasena;

    public function __construct($cedula, $nombre, $direccion, $salario, $telefono, $email, $sector, $contrasena)
    {
        parent::__construct($cedula, $nombre, $direccion, $salario, $telefono, $email);
        $this->setSector($sector);
        $this->setContrasena($contrasena);
}



public function getSector(){
    return $this->sector;
}

public function setSector($sector){
    $this->sector = $sector;
}

public function getContrasena(){
    return $this->contrasena;
}

public function setContrasena($contrasena){
    $this->contrasena = $contrasena;
}

}

