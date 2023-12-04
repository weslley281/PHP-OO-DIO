<?php

namespace Cadastro2\PhpOoDio;

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroDaConta;
    private float $saldo;

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroDaConta, float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroDaConta = $numeroDaConta;
        $this->saldo = $saldo;
    }

    public function getBanco(): string
    {
        return $this->banco;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function getNumeroDaConta(): string
    {
        return $this->numeroDaConta;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function exibirDadosBancario(): array
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'mumeroConta' => $this->numeroDaConta,
            'saldo' => $this->saldo,
        ];
    }

    public function depositar(float $deposito): void
    {
        $this->saldo += $deposito;
    }

    public function sacar(float $saque): void
    {
        $this->saldo -= $saque;
    }
}
