<?php

require_once 'cuenta.php';
require_once 'classic.php';
require_once 'gold.php';
require_once 'platinum.php';
require_once 'black.php';
require_once 'cliente.php';
require_once 'persona.php';
require_once 'pyme.php';
require_once 'multinacional.php';
require_once 'banco.php';


$classic = new Classic(345346355);
$gold = new Gold(345346355);
$platinum = new Platinum(345346355);
$black = new Black(345346355);
$ana = new Persona('email@email.com','123',$classic,'Ana','Lopez','323563987','05/06/2004');
$juan = new Persona('email@email.com','123',$gold,'Juan','Lopez','323563987','15/04/1995');
$pyme = new Pyme('pyme@email.com','123',$platinum,'203982719889','Nombre Pyme');
$multinacional = new Multinacional('multinacional@email.com','123',$black,'203982719889','Nombre Multinacional');

$banco = new Banco();
$banco->setCliente($ana);
$banco->setCliente($juan);
$banco->setCliente($pyme);
$banco->setCliente($multinacional);

//var_dump($banco);
$ana->getCuenta()->setBalance(1000);
$pyme->getCuenta()->setBalance(100000);
$pyme->liquidarHaberes($ana,5000);
$pyme->getCuenta()->getBalance();

$persona->getCuenta()->acreditar(40);

var_dump($pyme->mostrar());
var_dump($ana->mostrar());


var_dump($ana->getCuenta()->getBalance());
var_dump($pyme->getCuenta()->getBalance());


?>
