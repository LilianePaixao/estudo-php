<?php

namespace Alura\Banco\Service;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacoesDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacoes();
    }

    public function recuperaTotal():float
    {
        return $this->totalBonificacoes;
    }

}