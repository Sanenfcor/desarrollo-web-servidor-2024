<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
</head>
<body>
    <?php
    $numero = rand(1,200);
    $digitos = null;
    //$numero = 4;
    
    //Fórmula 1
    if($numero > 50) {
        echo "<p>1.1 El número $numero es mayor que 50";
    } elseif ($numero < 50) {
        echo "<p>1.2 El número $numero es menor que 50";
    } else {
        echo "<p>1.3 El número $numero es  50";
    }
    
    //Fórmula 2
    if ($numero > 100) echo "<p>2.1 El número $numero es mayor que 100";
    elseif ($numero < 100) echo "<p>2.2 El numero $numero es menor que 100";
    else echo "<p>2.3 El número $numero es 100";
    
    //Fórmula 3
    if ($numero > 150):
        echo "<p>3.1 El número $numero es mayor que 150";
    elseif($numero < 150):
        echo "<p>3.2 El número $numero es menor que 150";
    else :
        echo "<p>3.3 El número $numero es 150";
    endif;

    /*
        || u OR
        Comprpobar de 3 formas diferentes si son de 1, 2 o 3 dígitos
    */

    if($numero >= 1 && $numero <=9):
        //echo "<p>4.1 El número ($numero) tiene 1 solo dígito";
    elseif($numero > 9 && $numero <= 99):
        //echo "<p>4.2 El número ($numero) tiene 2 dígitos";
    else :
        //echo "<p>4.3 El número($numero) tiene 3 dígitos";
    endif;

    //Hacer mejoria con digitos


    //$numero aleatorio decimales = rand(10,100)/10;

    $n = rand(1,3);

    switch($n) {
        case 1:
            echo "El numero es 1";
            break;
        case 2:
            echo "El numero es 2";
            break;
        default:
            echo "El numero es 3";
    }
    ?>
</body>
</html>