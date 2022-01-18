<?php
class Conta //nome das classes sejam substantivo
{
    private string $cpfTitular; //propriedades são  privadas
    private string $nomeTitular;
    private float $saldo = 0;

    public function __construct(string $cpfTitular, string $nomeTitular) // serve para inicializar a instância: Conta
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    public function sacar(float $valorASacar): void //métodos são públicos
    {
        if ($valorASacar > $this->saldo) { //nome dos métodos sejam verbos
            echo "saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
        
    }
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
        
    }
    public function transferir(float $valorATransferir,Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar ($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    
    }
    public function recuperarSaldo():float
    {
        return $this->saldo;
    }
    
          
    public function recuperarNomeTitular():string
    {
        return $this->nomeTitular;
    }

    public function recuperarCpfTitular():string
    {
        return $this->cpfTitular;
    }
}
