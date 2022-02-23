<!DOCTYPE html>
<html lang = "es">
<head>
    <title> Inserción </title>
    <link rel="stylesheet" href="estilos/estilos_e3.css">
</head>
<body>
    <h2 style = "color: #7F0EFF;"> Inserción de nueva noticia </h2>

    <?php
        $conexion = mysqli_connect ("localhost", "cursophp", "", "lindavista");
        $consulta = mysqli_query($conexion, "insert into noticias (titulo, texto, categoria, fecha, imagen) values ('" . $_POST["ittitulo"] . "', '" . $_POST["tatexto"] . "', '" . $_POST["scategoria"] . "', CURDATE(), '" . $_POST["ifimagen"] . "');");            
    ?>

    <p>La noticia ha sido insertada con éxito. Puede ver las noticias aquí:</p><br>
    <a href = "e1.php"> Ver noticias </a>
</body>
</html>