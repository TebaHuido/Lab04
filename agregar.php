<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./subir.php" method="POST" enctype="multipart/form-data">
        <input required name="nombre" class="form-control" type="text" placeholder="Nombre"><br>
        <input required name="precio" class="form-control" type="number" placeholder="Precio"><br>
        <input required type="file" name="imagen"/><br>
        <textarea required name="descripcion"  rows="4" cols="50" placeholder="Descripcion del producto"></textarea><br>
            <!--Selector para categoria -->
        <select required name="categoria" class="form-control form-control-sm">
            <option>categoria 1</option>
            <option>categoria 2</option>
            <option>categoria 3</option>
        </select><br>
        <input required name="fecha" class="form-control" type="date" placeholder="Fecha de ingreso"><br>

        <input required type="radio" id="temp1" name="temporada" value="temporada1">
        <label for="temp1">temporada1</label><br>
        <input required type="radio" id="temp2" name="temporada" value="temporada2">
        <label for="temp2">temporada2</label><br>
        <input required type="radio" id="temp3" name="temporada" value="temporada3">
        <label required for="temp3">temporada3</label><br>
        <input type="radio" id="temp4" name="temporada" value="temporada4">
        <label required for="temp4">temporada4</label><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>