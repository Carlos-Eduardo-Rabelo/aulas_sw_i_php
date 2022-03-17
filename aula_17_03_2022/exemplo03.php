<?php
    //$idade = 17;
    //$habilitacao = FALSE;

    //$idade = 20;
    //$habilitacao = FALSE;

    // $idade = 18;
    // $habilitacao = TRUE;

    $idade = 15;
    $habilitacao = TRUE;

    //Aprovado se nota > 6 
    //Reprovado se nota < 5
    //Recuperação se nota entre 5 e 6

    if (($idade>=18) and ($habilitacao == TRUE)){
        //comando se verdadeiro
        echo "APROVADO";
    }
    else{
        echo "REPROVADO";
    }
?>