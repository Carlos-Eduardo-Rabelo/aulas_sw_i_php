<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php

    //$num1 = 5;
    //$num2 = 10;

    $nome = $_POST['nome'];    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $media = ($num1 + $num2 + $num3)/3;

    echo "<p> A média de notas de $nome é $media.</p>";
    ///echo "A soma de $num1 + $num2 é igual a $soma;

    ?>
</body>
</html>
