<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $peso = 67;
    $altura = 1.62;
    $imc = $peso / ($altura * $altura);

    if ($imc<18.5){
        echo "Seu imc é classificado como: Abaixo do peso";
    }

    else if ($imc >=18.5 && $imc <24.9){
        echo "Seu imc é classificado como: Peso normal";
    }

    else if ($imc >=24.9 && $imc <29.9){
        echo "Seu imc é classificado como: Sobrepeso";
    }

    else if ($imc >=29.9 && $imc <39.9){
        echo "Seu imc é classificado como: Obesidade";
    }

    else{
        echo "Seu imc é classificado como: Obesidade Grave";
    }

    echo "<br /> $imc";

    ?>
</body>
</html>