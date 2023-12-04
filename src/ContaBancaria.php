<?php

namespace Cadastro2\PhpOoDio;

class ContaBancaria
{
    private string $banco = "Banco Inter";
    private string $nomeTitular = "Fulano de Tal";
    private string $numeroAgencia = "1234";
    private string $numeroDaConta = "000008-1";
    private float $saldo = 0;

    public function getBanco(): string
    {
        return $this->banco;
    }

    public function setBanco(string $banco): void
    {
        $this->banco = $banco;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->banco = $nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function setNumeroAgencia(string $numeroAgencia): self
    {
        $this->numeroAgencia = $numeroAgencia;

        return $this;
    }

    public function getNumeroDaConta(): string
    {
        return $this->numeroDaConta;
    }

    public function setNumeroDaConta(string $numeroDaConta): self
    {
        $this->numeroDaConta = $numeroDaConta;

        return $this;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

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
