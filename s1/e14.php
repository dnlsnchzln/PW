<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Ejercicio 14</title>
    </head>
    <body>

        <form action = "e14.php" method = "POST">

            <label> Nombre </label><br>
            <input type = "text" id = "tiname" name = "tiname" required = ""><br>

            <label> Apellidos </label><br>
            <input type = "text" id = "tisurname" name = "tisurname" required = ""><br>

            <label> Edad </label><br>
            <input type = "number" id = "niage" name = "niage" required = ""><br>

            <label> Sexo: </label><br>
            <input type = "radio" name = "rbisex" id = "rbisexmale" value = 0 checked = "">
            <label for = "rbisexmale"> Masculino </label><br>
            <input type = "radio" name = "rbisex" id = "rbisexfemale" value = 1>
            <label for = "rbisexfemale"> Femenino </label><br>

            <label> Ciudad de nacimiento </label><br>
            <input type = "text" id = "ticityofborn" name = "ticityofborn" required = ""><br>

            <label> Ciudad de residencia </label><br>
            <input type = "text" id = "ticityofresidence" name = "ticityofresidence" required = ""><br>

            <label> Licenciatura </label><br>
            <input type = "text" id = "tidegree" name = "tidegree" required = ""><br>

            <label> Curso </label><br>
            <select name = "year" id = "year">
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
                <option value = "5">5</option>
                <option value = "6">6</option>
            </select><br><br>

            <input type = "submit" value = "Enviar">
        </form>

        <?php
            if (array_key_exists('tiname', $_POST)):
                print "<p> " . "El nombre del estudiante es " . $_POST["tiname"] . " " . $_POST["tisurname"] . " (";

                if ($_POST["rbisex"] == 0):
                    print "Masculino) ";
                else:
                    print "Femenino) ";
                endif;

                print "y tiene " . $_POST["niage"] . " años. Nació en " . $_POST["ticityofborn"] . " y reside actualmente en " . $_POST["ticityofresidence"] . ". Estudia " . $_POST["tidegree"] . " (Curso " . $_POST["year"] . "). </p>";
            endif;
        ?>

    </body>
</html>