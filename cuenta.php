<?php

abstract class Cuenta
{
  protected $cbu;
  protected $balance;
  protected $fechaUltimoMovimiento;

  protected function __construct($cbu){
    $this->cbu = $cbu;
  }

  protected function setCbu(int $cbu){
    $this->cbu = $cbu;
  }

  protected function getCbu(){
    return $this->cbu;
  }

  public function setBalance($balance){
    $this->balance = $balance;
  }

  public function getBalance(){
    return $this->balance;
  }

  protected function setFechaUltimoMovimiento($fechaUltimoMovimiento){
    $this->fechaUltimoMovimiento = $fechaUltimoMovimiento;
  }

  protected function getFechaUltimoMovimiento(){
    return $this->fechaUltimoMovimiento;
  }

  protected abstract function debitar($monto, $lugar);

  public function acreditar($monto){
    $fecha = getdate();
    $this->setFechaUltimoMovimiento($fecha);
    $saldo = $this->getBalance();
    if ($this instanceOf Classic) {
      $monto = $monto * 0.95;
    } else if ($this instanceOf Gold) {
      if ($monto >= 25000) {
        $monto = $monto * 0.97;
      }
    } else if ($this instanceOf Black) {
      if ($monto >= 1000000) {
        $monto = $monto * 0.96;
      }
      $saldo = $saldo + $monto;
      $this->setBalance($saldo);
    }

  }



}



?>
