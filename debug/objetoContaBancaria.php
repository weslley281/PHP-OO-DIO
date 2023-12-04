<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Cadastro2\PhpOoDio\ContaBancaria;

$conta = new ContaBancaria("Banco Pan", "Fulano de tal", "1234", "0008-1", 2000);

var_dump($conta->exibirDadosBancario());

echo $conta->depositar(500);
echo PHP_EOL;

echo $conta->sacar(1500);
echo PHP_EOL;

echo $conta->getSaldo();
echo PHP_EOL;
