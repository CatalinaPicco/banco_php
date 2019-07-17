<?php

 Class Banco
{
  protected $clientes;

  public function setCliente($cliente){
    $this->clientes[] = $cliente;
  }

  public function getClientes(){
    return $this->clientes;
  }


  }
