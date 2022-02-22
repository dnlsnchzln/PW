<!DOCTYPE html>
<html lang="es">
<head>
    <title>Encuesta</title>
</head>
<body>
    <h2 style = "color: #7F0EFF;"> Encuesta </h2>

    <?php
        $conexion = mysqli_connect ("localhost", "cursophp", "", "lindavista");
        if ($_POST["rbiencuesta"] == 0):
            mysqli_query ($conexion, "update votos set votos1 = votos1 + 1 where id = 1;");
        else:
            mysqli_query ($conexion, "update votos set votos2 = votos2 + 1 where id = 1;");
        endif;

        mysqli_close ($conexion);
    ?>
    
    <p> Se ha registrado su voto. Puede ver los resultados en link inferior. Muchas gracias. </p>

    <a href = "e2_3.php"> Ver resultados </a>
</body>
</html>