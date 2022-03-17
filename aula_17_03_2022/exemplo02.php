<?php
    $nota = 5.5;

    //Aprovado se nota > 6 
    //Reprovado se nota < 5
    //Recuperação se nota entre 5 e 6

    if ($nota>6){
        //comando se verdadeiro
        echo "APROVADO";
    }
    elseif ($nota<5){
        //comando se falso
        echo "REPROVADO";
    }
    else{
        echo "RECUPERAÇÃO";
    }
?>