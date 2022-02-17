<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php

        function mipow($base, $exp)
        {
            $pot = $base;

            for ($i = 0; $i < $exp-1; $i++)
                $pot *= $base;

            return $pot;
        }

        define("TAM", 4);

        $color = "gray";
        print "<table border = 3>";
        for ($i = 1; $i <= TAM; $i++)
        {
            print "<tr>";
            for ($j = 1; $j <= TAM; $j++)
            {
                print "<td>" . mipow($i, $j) . "</td>";
            }
            print "</tr></br>";
        }
        print "</table>";

        ?>
    </body>
</html>