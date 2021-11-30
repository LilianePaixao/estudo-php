<?php
$idade=16;
$numeroDePessoas=0;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo " a partir de 16 anos acompanhado \n " ;

if ($idade >=18){
    echo "Vocẽ tem $idade anos. Pode entrar sozinho.";
}elseif($idade >= 16 && $numeroDePessoas >= 1){
    echo "Você tem $idade anos. Pode entrar se estiver acompanhado(a)";
}else {
    echo "Você tem \"$idade\" anos. Não pode entrar";
}
echo "\n";
echo "Adeus";
?>