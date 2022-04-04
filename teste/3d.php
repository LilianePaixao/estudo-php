<?php
    // d) Criar um array com 20 números inteiros. Você deverá imprimir o maior e o menor número desse array, além de calcular e exibir o percentual de números pares e ímpares, e por fim, o valor médio dos números desse array.

    $inteiros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    foreach ($inteiros as $numero){
        ($numero % 2 == 0 ? $par[] = $numero : $impar[] = $numero );
    }    
    
    echo "O maior valor do array é ". max($inteiros). " e o menor é ". min($inteiros)."." .PHP_EOL;
    echo "Dentre os números, o percentual de pares é ". count($par) * 5 ."% e o de ímpares é " . count($impar) * 5 . "%." .PHP_EOL;
    echo "O valor médio dos números informados é " . array_sum($inteiros)/20 .PHP_EOL;
?>
