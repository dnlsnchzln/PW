<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <?php

        $array_asociativo = [1 => 90, 30 => 7, 'e' => 99, "hola" => 43];

        foreach ($array_asociativo as $key => $value)
        {
            print $value . "</br>";
        }
            
        ?>
    </body>
</html>