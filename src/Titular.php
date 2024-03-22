<?php

class Titular 
{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        //atributos
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome; 
    }
    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    /**
     * Retorna a string CPF 
     */
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }
    /**
     * Retorna a string nome 
     */
    public function recuperaNome():string
    {
        return $this -> nome;
    }
}