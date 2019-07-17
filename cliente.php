<?php

abstract Class Cliente
{
  protected $email;
  protected $pass;
  protected $cuenta;

  protected function __construct($email,$pass,$cuenta){
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;
  }

  protected function setEmail($email){
    $this->email = $email;
  }

  protected function getEmail(){
    return $this->email;
  }

  protected function setPass($pass){
    $this->pass = $pass;
  }

  protected function getPass(){
    return $this->pass;
  }

  public function setCuenta($cuenta){
    $this->cuenta = $cuenta;
  }

  public function getCuenta(){
    return $this->cuenta;
  }

  public function cobrarServicios(){
    $cuenta = $this->getCuenta();
    $saldo = $cuenta->getBalance();
    if ($cuenta instanceOf Classic) {
      $saldo = $saldo - 100;
    } else if ($cuenta instanceOf Gold) {
      if ($this instanceOf Persona) {
        $saldo = $saldo - strlen($this->getApellido()) * 10 ;
      } else {
        $saldo = $saldo - strlen($this->getRazonSocial()) * 5 ;
      }
    } else if ($cuenta instanceOf Platinum) {
      $saldo = $saldo * 0.9;
    } else if ($cuenta instanceOf Black) {
      $saldo = $saldo - 500;
    }
  }


  }
