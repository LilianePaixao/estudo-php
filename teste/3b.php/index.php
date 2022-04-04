<?php
//b) Ler a data de nascimento do usuário e imprima se o mesmo é maior de 18 anos e a idade calculada.
    //Primeira tentativa
    // $currentDate = new Date();
    // echo $currentDate->format('d/m/Y');
    // $birthDate = new Date('29/08/1984');
    // $gap = $currentDate->diff($birthDate);
    // print_r($gap);

    //código correto
    $birthDate = date('29/08/1984');
    
    $currentDate = date('d/m/Y');

    //birthdate
    list($day, $month, $year) = explode('/', $birthDate);

    //today
    $currentDate = mktime(0, 0, 0, date('d'), date('m'), date('Y'));

    $birthDate = mktime(0, 0, 0,$day, $month, $year);

    //math (descobrir por que a conta está errada)
    $age = floor((((($currentDate - $birthDate) / 60) / 24) / 60) /365.25);
    
    if ($age >= 18){
        echo "O usuário é maior de 18 anos.".PHP_EOL;
        echo "Idade é $age anos.";
    } else {
        echo "";
    }







