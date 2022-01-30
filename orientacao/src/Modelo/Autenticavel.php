<?php

namespace Alura\Banco\Modelo;

abstract class Autenticavel
{
    abstract public function podeAutenticar(string $senha):bool;

}