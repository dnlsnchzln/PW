<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php

        define("TAM", 10);

        $color = "gray";
        print "<table border = 3>";
        for ($i = 0; $i <= 90; $i += TAM)
        {
            print "<tr>";
            for ($j = 1; $j <= 10; $j++)
            {
                print "<td style = 'background-color:". $color ."'>" . $i + $j . "</td>";
                
                if ($color == "gray" && $j < 10)
                    $color = "white";
                else if($color == "white" && $j < 10)
                    $color = "gray";
            }
            print "</tr></br>";
        }
        print "</table>";

        ?>
    </body>
</html>