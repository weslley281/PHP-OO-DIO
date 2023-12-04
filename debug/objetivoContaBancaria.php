<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Cadastro2\PhpOoDio\ContaBancaria;

$conta = new ContaBancaria();

var_dump($conta);
var_dump($conta->exibirDadosBancario());
var_dump($conta->exibirDadosBancario());
