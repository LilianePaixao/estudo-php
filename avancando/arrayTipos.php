<?php
$array=[
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true =>"d",
    "qualquer-coisa" => "teste"
];

foreach($array as $item){
    echo $item.PHP_EOL;
}
