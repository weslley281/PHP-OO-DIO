<?php

declare (strict_types = 1);

namespace Cadastro2\PhpOoDio\TiposContas;

use Cadastro2\PhpOoDio\ContaBancaria;

class ContaPoupanca extends ContaBancaria
{
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Conrrente";

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroDaConta, float $saldo)
    {
        parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroDaConta, $saldo);
    }

    public function obterSaldo(): string
    {
        return "Seu saldo atual é: R$ " . number_format(($this->obterSaldo() + ($this->obterSaldo() - self::RENDIMENTO)), 2, ',', '');
    }
}
