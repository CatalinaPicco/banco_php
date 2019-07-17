<?php

require_once 'imprimible.php';

class Gold extends Cuenta implements Imprimible
{

  public function __construct($cbu){
    parent::__construct($cbu);
  }

  public function debitar($monto, $lugar) {

  }

  public function mostrar() {
    return parent::getBalance();
  }

}


?>
