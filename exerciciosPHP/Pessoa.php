<?php

class Pessoa
{
    private string $primeiroNome;
    private string $ultimoNome;
    private \DateTimeInterface $dataNascimento;

    public function setPrimeiroNome(string $primeiroNome): void
    {
        $this->primeiroNome = $primeiroNome;
    }

    public function getPrimeiroNome(): string
    {
        return $this->primeiroNome;
    }

    public function setUltimoNome(string $ultimoNome): void
    {
        $this->ultimoNome = $ultimoNome;
    }

    public function getUltimoNome(): string
    {
        return $this->ultimoNome;
    }

    public function setDataNascimento(\DateTimeInterface $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataNascimento(): \DateTimeInterface
    {
        return $this->dataNascimento;
    }
}