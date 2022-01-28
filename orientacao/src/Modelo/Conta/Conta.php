<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta //nome das classes sejam substantivo
{
    private string $titular; //propriedades são  privadas
    private float $saldo;
    private static $numeroDeContas = 0;
    
    
    public function __construct(Titular $titular) // inicializa a instância: Conta
    {
        $this->titular = $titular;
        $this->saldo = 0;
        
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void //métodos são públicos
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) { //nome dos métodos sejam verbos
            echo "saldo indisponível";
            return;
        }
        $this->saldo -= $valorSaque;
        
    }
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
        
    }
        public function recuperarSaldo():float
    {
        return $this->saldo;
    }
             
    public function recuperaNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas():int
    {
        return self::$numeroDeContas;
    }
    abstract protected function percentualTarifa(): float;
    
}
