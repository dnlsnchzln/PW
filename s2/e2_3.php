<!DOCTYPE html>
<html lang="es">
<head>
    <title>Resultados</title>
    <link rel="stylesheet" type="text/css" href="estilos/estilos_e2_3.css">
</head>
<body>
    <h2 style = "color: #7F0EFF;"> Encuesta. Resultados de la votación </h2>
    <table>
    <?php
        $conexion = mysqli_connect ("localhost", "cursophp", "", "lindavista");
        $consulta = mysqli_query ($conexion, "select * from votos");
        $nfilas = mysqli_num_rows ($consulta);

        $nombre_columnas = array("Respuesta", "Votos", "Porcentaje", "Representación gráfica");
        print "<tr style = 'background-color: #7F0EFF;'>";
        for ($i = 0; $i < count($nombre_columnas); $i++):
            print "<td style = 'color: white;'>" . $nombre_columnas[$i] . "</td>";
        endfor;
        print "</tr>";

        if ($nfilas > 0):
            $fila = mysqli_fetch_array ($consulta);
            $votos_totales = ($fila["votos1"] + $fila["votos2"]);
            print "<tr>";
                print "<td bgcolor = '#BFBFBF'> Sí </td>";
                print "<td bgcolor = '#BFBFBF'>" . $fila["votos1"] . "</td>";
                if ($votos_totales == 0):
                    print "<td bgcolor = '#BFBFBF'> 0 % </td>";
                else:
                    print "<td bgcolor = '#BFBFBF'>" . round($fila["votos1"] / $votos_totales * 100.0, 2) . " % </td>";
                endif;
                print "<td bgcolor = '#BFBFBF'>";
                    print "<div class = 'grafico'>";
                        if ($votos_totales == 0):
                            print "<strong class = 'barra' style = 'width: 0%;'> 0 % </strong>";
                        else:
                            print "<strong class = 'barra' style = 'width: " . round($fila["votos1"] / $votos_totales * 100.0) . "%;'>" . round($fila["votos1"] / $votos_totales * 100.0, 2) . " % </strong>";
                        endif;
                    print "</div>";
                print "</td>";
            print "</tr>";
            print "<tr>";
                print "<td bgcolor = '#BFBFBF'> No </td>";
                print "<td bgcolor = '#BFBFBF'>" . $fila["votos2"] . "</td>";
                if ($votos_totales == 0):
                    print "<td bgcolor = '#BFBFBF'> 0 % </td>";
                else:
                    print "<td bgcolor = '#BFBFBF'>" . round($fila["votos2"] / $votos_totales * 100.0, 2) . " % </td>";
                endif;
                print "<td bgcolor = '#BFBFBF'>";
                    print "<div class = 'grafico'>";
                        if ($votos_totales == 0):
                            print "<strong class = 'barra' style = 'width: 0%;'> 0 % </strong>";
                        else:
                            print "<strong class = 'barra' style = 'width: " . round($fila["votos2"] / $votos_totales * 100.0) . "%;'>" . round($fila["votos2"] / $votos_totales * 100.0, 2) . " % </strong>";
                        endif;
                    print "</div>";
                print"</td>";
            print "</tr>";
        endif;
    ?>
    </table><br>

    <?php
        print "Número total de votos emitidos: " . $votos_totales;

        mysqli_close ($conexion);
    ?>

    <br><br><a href = "e2.php"> Página de votación </a>
</body>
</html>