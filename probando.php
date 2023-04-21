<?php

class Persona {
    //ATRIBUTOS $nombre, $apellido, $dni
    private $nombre;
    private $apellido;
    private $dni;

    public function __construct($name, $lastname, $nroDoc)
    {
        $this->nombre = $name;
        $this->apellido = $lastname;
        $this->dni = $nroDoc;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDni(){
        return $this->dni;
    }

    public function setNombre($name){
        $this->nombre = $name;
    }
    public function setApellido($lastname){
        $this->apellido = $lastname;
    }
    public function setDni($nroDoc){
        $this->dni = $nroDoc;
    }

    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . "\nApellido: " . $this->getApellido() . "\nDni: " . $this->getDni(); 
    }


}


$objetoPersona = new Persona("Nicolas", "Antinao", 41050862);
echo $objetoPersona . "\n"; 