<!DOCTYPE html>
<html lang="es">
<head>
    <title>Encuesta</title>
</head>
<body>
    <h2 style = "color: #7F0EFF;"> Encuesta </h2>

    <p> ¿Creé usted que el precio de la vivienda seguirá subiendo al ritmo actual? </p>

    <form action = "e2_2.php" method = "POST">
        <input type = "radio" name = "rbiencuesta" id = "rbisi" value = 0>
        <label for = "rbisi"> Sí </label><br>
        <input type = "radio" name = "rbiencuesta" id = "rbino" value = 1>
        <label for = "rbino"> No </label><br><br>

        <input type = "submit" value = "Votar"><br><br>
    </form>

    <a href = "e2_3.php"> Ver resultados </a>
</body>
</html>