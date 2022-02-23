<!DOCTYPE html>
<html lang = "es">
<head>
    <title> Inserción </title>
    <link rel="stylesheet" href="estilos/estilos_e3.css">
</head>
<body>
    <h2 style = "color: #7F0EFF;"> Inserción de nueva noticia </h2>

    <div class = "cuadro">
        <form action = "e3_2.php" method = "POST">
            <div class = "form-item">
                <label> Título: * </label>
                <input type = "text" name = "ittitulo" id = "ittitulo"><br><br>
            </div>
            
            <div class = "form-item">
                <label> Texto: * </label>
                <textarea name = "tatexto" id = "tatexto" cols="30" rows="10"></textarea><br><br>
            </div>

            <div class = "form-item">
                <label> Categoría: </label>
                <select name = "scategoria" id = "scategoria">
                    <option value = "Promociones"> Promociones </option>
                    <option value = "ofertas"> Ofertas </option>
                    <option value = "costas"> Costas </option>
                </select><br><br>
            </div>

            <div class = "form-item">
                <label> Imagen: </label>
                <input type = "file" name = "ifimagen" id = "ifimagen"><br><br>
            </div>

            <input type = "submit" value = "Insertar noticia">
        </form>
    </div>
</body>
</html>