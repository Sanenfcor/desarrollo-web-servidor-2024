<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
    $numero = "2";
    $numero = (int) $numero;

    if($numero === 2){
        echo "<p>EXITO";
    } else {
        echo "<p>NO EXITO";
    }

    /*
        "2" == 2
        "2" !== 2
        2 === 2
        2 !=== 2.0
    */

    $hora = (int)date("G");
    //var_dump($hora);

    /*
        SI $hora ENTRE 6 y 11, es MAÑANA
        SI $hora ENTRE 12 y 14, es MEDIODIA
        SI $hora ENTRE 15 y 20, es TARDE
        SI $hora ENTRE 20 y 24, es NOCHE
        SI $hora ENTRE 1 y 5, es MADRUGADA
    */

    $hora_exacta = date("H:i:s");

    echo "<p><h1>$hora_exacta</h1></p>";

    $dia = date("l");
    echo "<h2>Hoy es $dia</h2>";

    /*
        TENEMOS CLASE LOS LUNES, MIERCOLES Y VIERNES
        NO TENEMOS CLASE EL RESTO

        HACER UN SWITCH QUE DIGA SI HOY TENEMOS CLASE
    */

    //$dia = "friday";

    switch($dia) {
        case "monday":
        case "wednesday": 
        case "friday":
            echo "Hoy es $dia, tenemos clase";
            break;
        default:
            echo "Hoy $dia, no tenemos clase";
    }
    ?>
</body>
</html>