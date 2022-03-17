<?php
    /*
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
    */
    $sigla = "RJ";
    switch ($sigla
    ) {
        case 'SP':
            # code...
            echo "Você escolheu São Paulo";
            break;
        case 'RJ':
            echo "Você escolheu Rio de Janeiro";
            break;
        case 'MG':
            echo "Você escolheu Minas Gerais";
            break;
        default:
            # code...
            echo "Você não escolheu nenhum estado.";
            break;
    }
?>