<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php

        define("TAM", 4);

        $dir = "fotos/";
        
        if (is_dir($dir)):

            print "<table border = 3>";

            $files = scandir($dir);
            $n_files = count($files);

            $k = 0;
            for ($i = 2; $i < $n_files; $i++):
                
                preg_match_all('/.*\.(jpg|jpeg|png)/', $files[$i], $matches);

                if (count($matches) != 0):
                    if ($k % TAM == 0):

                        if ($i > 2):

                            print "</tr></br>";
                        endif;

                        print "<tr>";
                    endif;
                    
                    print "<td>" . "<a href = 'fotos/" . $files[$i] . "'><img src = 'fotos/" . $files[$i] . "' width = '100 px' heigth = '100 px'></a></img>" . "</td>";

                    $k++;
                endif;
            endfor;

            print "</table>";
        endif;
            
        ?>
    </body>
</html>