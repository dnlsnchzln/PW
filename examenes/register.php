<!DOCTYPE html>
<html lang = "es">
<head>
    <title> Register </title>
</head>
<body>

    <?php
        if (array_key_exists("tiemail", $_POST)):
            $conn = mysqli_connect("localhost", "root", "", "examen");
            $query = "insert into usuarios (email, sex, yob, zip, country, password) values ('" . $_POST["tiemail"] . "', '";

            if ($_POST["rbisex"] == "0"):
                $query = $query . "Male";
            else:
                $query = $query . "Female";
            endif;

            $query = $query . "', '" .  $_POST["tiyearofbirth"] . "', '" .  $_POST["tizip"] . "', '" .  $_POST["scountry"] . "', '" . password_hash($_POST["phipw"], PASSWORD_DEFAULT) . "')";
            mysqli_query($conn, $query);
        endif;
    ?>

    <?php
        $Countries = array("Andorra", "Belgium", "Germany", "Spain");
    ?>

    <form action = "register.php" method = "POST">
        <label> E-mail: </label>
        <input type = "text" name = "tiemail" id = "tiemail"><br><br>

        <label> Confirm E-mail: </label>
        <input type = "text" name = "ticonfirmemail" id = "ticonfirmemail"><br><br>

        <label> Sex </label>
        <input type = "radio" name = "rbisex" id = "rbisexm" value = "0">
        <label for = "rbisexm"> Male </label>
        <input type = "radio" name = "rbisex" id = "rbisexf" value = "1">
        <label for = "rbisexf"> Female </label><br><br>

        <label> Year of birth: </label>
        <input type = "text" name = "tiyearofbirth" id = "tiyearofbirth"><br><br>

        <label> ZIP/Postal Code: </label>
        <input type = "text" name = "tizip" id = "tizip"><br><br>

        <label> Country: </label>
        <select name = "scountry" id = "scountry">
        
        <?php
            for ($i = 0; $i < count($Countries); $i++):
                print "<option value = '" . $Countries[$i] . "'>" . $Countries[$i] . "</option>";
            endfor;
        ?>

        </select><br><br>

        <label> Select a password: </label>
        <input type = "password" name = "phipw" id = "ppw"><br><br>

        <label> Confirm password: </label>
        <input type = "password" name = "pconfirmpw" id = "pconfirmpw"><br><br>

        <input type = "submit" value = "REGISTER!">
    </form>
</body>
</html>