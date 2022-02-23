<!DOCTYPE html>
<html lang="es">
<head>
    <title>Consulta</title>
</head>
<body>
    <h2 style = "color: #7F0EFF;"> Eliminación de noticias </h2>

    <form action = "e4.php" method = "POST">
    <table>
    <?php

        if (array_key_exists("cbiborrar", $_POST)):
            $conexion = mysqli_connect ("localhost", "cursophp", "", "lindavista");

            foreach ($_POST["cbiborrar"] as $marcado):
                mysqli_query ($conexion, "delete from noticias where id = " . $marcado . ";");
            endforeach;

            mysqli_close($conexion);
        endif;

        $conexion = mysqli_connect ("localhost", "cursophp", "", "lindavista");
        $consulta = mysqli_query ($conexion, "select * from noticias order by fecha desc;");
        $nfilas = mysqli_num_rows ($consulta);
        
        $nombre_columnas = array("Titulo", "Texto", "Categoria", "Fecha", "Imagen", "Borrar");
        print "<tr style = 'background-color: #7F0EFF;'>";
        for ($i = 0; $i < count($nombre_columnas); $i++):
            print "<td style = 'color: white;'>" . $nombre_columnas[$i] . "</td>";
        endfor;
        print "</tr>";

        if ($nfilas > 0):
            for ($i = 0; $i < $nfilas; $i++):
                $fila = mysqli_fetch_array ($consulta);
                print "<tr>";
                    print "<td bgcolor = '#BFBFBF'>" . $fila["titulo"] . "</td>";
                    print "<td bgcolor = '#BFBFBF'>" . $fila["texto"] . "</td>";
                    print "<td bgcolor = '#BFBFBF'>" . $fila["categoria"] . "</td>";
                    print "<td bgcolor = '#BFBFBF'>" . $fila["fecha"] . "</td>";
                    print "<td bgcolor = '#BFBFBF'>";
                        if ($fila["imagen"]):              
                            print "<a href = '" . $fila["imagen"] . "' target = '_blank'><img src = 'iconos/icono_imagen.png' width = 35 heigth = 35></img></a>";
                        endif;
                    print "</td>";
                    print "<td bgcolor = '#BFBFBF'><input type = 'checkbox' name = 'cbiborrar[]' value = '" . $fila["id"] . "'></td>";
                print "</tr>";
            endfor;
        endif;

        mysqli_close ($conexion);
    ?>
    </table>
    
        <br><input type = "submit" value = "Borrar noticias marcadas">
    </form>
</body>
</html>