<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct (string $nome,CPF $cpf,string $cargo)
    {
        parent::__construct($nome,$cpf);
        $this->validaNomeTitular($nome);
        $this->cargo = $cargo;
    }
    
    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    protected function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}
