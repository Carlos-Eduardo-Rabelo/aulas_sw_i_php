<?php

// Trabalhando com vetores
// $numeros = array(1,12,50,1.2);
$numeros = [1,12,50,1.2];
//echo $numeros[2];
$qtde = count($numeros);
//echo $qtde;
echo "Meu vetor tem: $qtde de posições <hr>";
$total = 0;
for ($i=0; $i<4; $i++) { 
    echo "Indice = $i ==> $numeros[$i] <br>";
    $total = $total + $numeros[$i];
}
echo "<hr>";
echo "Soma total é: $total <br>";
$media = $total/$qtde;
echo "A média é $media";
?>