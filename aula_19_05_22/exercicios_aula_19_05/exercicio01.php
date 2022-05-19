<?php
$meses = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro', 'Dezembro'];
$nmes = rand(1,13);
switch ($nmes) {
    case 1:
        # code...
        echo $meses[0];
        break;
    case 2:
        # code...
        echo $meses[1];
        break;
    case 3:
        # code...
        echo $meses[2];
        break;
    case 4:
        # code...
        echo $meses[3];
        break;
    case 5:
        # code...
        echo $meses[4];
        break;
    case 6:
        # code...
        echo $meses[5];
        break;
    case 7:
        # code...
        echo $meses[6];
        break;
    case 8:
        # code...
        echo $meses[7];
        break;
    case 9:
        # code...
        echo $meses[8];
        break;
    case 10:
        # code...
        echo $meses[9];
        break;
    case 11:
        # code...
        echo $meses[10];
        break;
    case 12:
        # code...
        echo $meses[11];
        break;
    default:
        # code...
        echo "Digite um número de 1 a 12!";
        break;
}
?>