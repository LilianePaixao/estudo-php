<?php

    // Ler um número (de 1 a 12) e informe o mês correspondente por extenso.
    $month = ['', 'janeiro', 'fevereiro', 'março','abril','maio','junho', 'julho', 'agosto', 'setembro', 'outubro','novembro', 'dezembro'];

    //echo "O mês correspondente ao número 1 é $month[1].";

    // foreach($month as $key => $value){
    //     echo " O mês correspondente a '$key' é '$value'. " . PHP_EOL;
    // }
    
    for ($i = 1; $i < count($month); $i++){
        echo "O número " . $i . " corresponde ao mês de " . $month[$i] .".". PHP_EOL;
    }
    // try to do
    // function month($month[])
    // {
    //     echo $month;
    // }
?>

