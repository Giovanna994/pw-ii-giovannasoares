<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //Fazer duas estruturas, uma só com numeros pares de 0 á 100, a outra com numeros impares de 1 ao 40.

    //Par
    $contador=0;
    while($contador<=100){
        echo "$contador <br /> ";
        $contador=$contador+2;
    }

    echo ("<br/>");

    //Imapar
    $contador=1;
    while($contador<=40){
        echo "$contador <br /> ";
        $contador=$contador+2;
    }

    ?>
    
</body>
</html>