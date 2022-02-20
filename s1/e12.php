<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Ejercicio 12</title>
    </head>
    <body>
        <?php

        function eurosToDolares($euros)
        {
            return 1.13 * $euros;
        }

        function dolaresToEuros($dolares)
        {
            return 0.88 * $dolares;
        }

        print "<form action = 'e12.php' method = 'POST'>";
        
        print "<input type = 'text' placeholder = 'Introduce cantidad...' name = 'cantidad'></input>";
        print "<input type = 'radio' name = 'divisa' id = 'rbieuros' value = 0 checked = 'checked'>";
        print "<label for = 'euros'> Euros </label>";
        print "<input type = 'radio' name = 'divisa' id = 'rbidolares' value = 1>";
        print "<label for = 'dolares'> Dolares </label></br>";
        print "<input type = 'text' "; 
        
        if (array_key_exists('cantidad', $_POST)):
            if ($_POST['divisa'] == 0):
                print "value = 'Dolares: " . eurosToDolares(floatval($_POST['cantidad'])) . " $'";
            elseif ($_POST['divisa'] == 1):
                print "value = 'Euros: " . dolaresToEuros(floatval($_POST['cantidad'])) . " €'";
            endif;
        endif;

        print "></input></br></br>";

        print "<input type = 'submit' value = 'Convertir'></input>";

        print "</form>";
            
        ?>
    </body>
</html>