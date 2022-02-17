<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
        
        print "<table border = 1>";
        for ($i = 0; $i <= 90; $i += 10)
        {
            print "<tr>";
            for ($j = 1; $j <= 10; $j++)
            {
                print "<td>" . $i + $j . "</td>";
            }
            print "</tr></br>";
        }
        print "</table>";

        ?>
    </body>
</html>