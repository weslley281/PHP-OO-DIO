<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Cadastro2\PhpOoDio\ContaBancaria;

$conta = new ContaBancaria();

var_dump($conta);
var_dump($conta->exibirDadosBancario());

$conta2 = new ContaBancaria();
$conta2->setBanco("Banco Seguro");
$conta2->setNomeTitular("Cicrano de Tal");
$conta2->setNumeroAgencia("4321");
$conta2->setNumeroDaConta("0007-1");
$conta2->setSaldo(3000);
var_dump($conta2->exibirDadosBancario());
