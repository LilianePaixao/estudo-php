<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;

class Titular extends Pessoa implements Autenticavel
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
    public function podeAutenticar(string $senha):bool
    {
        return $senha === 'abcd';
    }
}