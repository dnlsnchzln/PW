<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php

        $array_pares = array();

        for ($i = 1; $i <= 10; $i++)
        {
            $array_pares[$i-1] = 2 * $i;
            print $array_pares[$i-1] . "</br>";
        }
            
        ?>
    </body>
</html>