<?php

require_once 'imprimible.php';

class Persona extends Cliente implements Imprimible
{
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;

  function __construct($email,$pass,$cuenta,$nombre,$apellido,$documento,$nacimiento)
  {
    parent::__construct($email,$pass,$cuenta);
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }

  public function mostrar() {
    return $this->getNombre() . ' ' . $this->getApellido();
  }


}

?>
