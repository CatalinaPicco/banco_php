<?php

require_once 'liquidable.php';
require_once 'imprimible.php';

class Pyme extends Cliente implements Liquidable, Imprimible
{
  Private $cuit;
  Private $razonSocial;

  public function __construct($email,$pass,$cuenta, $cuit, $razonSocial){
    parent::__construct($email,$pass,$cuenta);
    $this->email = $cuit;
    $this->razonSocial = $razonSocial;
  }

  public function setCuit($cuit){
    $this->cuit = $cuit;
  }

  public function getCuit(){
    return $this->cuit;
  }

  public function setRazonSocial($razonSocial){
    $this->razonSocial = $razonSocial;
  }

  public function getRazonSocial(){
    return $this->razonSocial;
  }

  public function debitar($monto, $lugar) {
    $balance = $this->getCuenta()->getBalance();
    $balance = $balance - $monto;
    $this->getCuenta()->setBalance($balance);
  }

  public function liquidarHaberes($persona, $monto){
    $persona->getCuenta()->acreditar($monto);
    $debitar = $monto * 0.01;
    $this->debitar($debitar, 'pyme');
  }

  public function mostrar() {
    return $this->getRazonSocial();
  }

}

?>
