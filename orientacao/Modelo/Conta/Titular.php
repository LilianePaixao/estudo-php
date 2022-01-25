<?php

namespace Alura\Banco\Modelo\Conta;

class Titular extends Pessoa
{
    private string $endereco;

    public function __construct(string $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome,$cpf);
        $this->endereco = $endereco;
    }
    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

}