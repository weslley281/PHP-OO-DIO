<?php

namespace Cadastro2\PhpOoDio;

class ContaBancaria
{
    public string $banco = "Banco Inter";
    public string $nomeTitular = "Fulano de Tal";
    public string $numeroAgencia = "1234";
    public string $numeroDaConta = "000008-1";
    public float $saldo = 0;

    public function exibirDadosBancario(): array
    {
        return [
            'banco' => $this->banco,
            'nomeTitulae' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'mumeroConta' => $this->numeroDaConta,
            'saldo' => $this->saldo,
        ];
    }
}
