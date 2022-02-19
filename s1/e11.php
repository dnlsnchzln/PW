<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Ejercicio 11</title>
    </head>
    <body>
        <?php

        function eurosToDolares($euros)
        {
            return 0.88 * $euros;
        }

        print "<form action = 'e11.php' method = 'POST'>";

        print "<label> Euros: </label></br>";
        print "<input type = 'number' placeholder = 'Introduce los euros...' name = euros> </input></br>";
        print "<label> Dolares: </label></br>";
        print "<input type = 'number' value = '"; 
        
        if ($_POST['euros']):
            print eurosToDolares($_POST['euros']);
        endif;
        
        print "'></input></br></br>";

        print "<input type = 'submit' value = 'Convertir'></input>";

        print "</form>";
            
        ?>
    </body>
</html>