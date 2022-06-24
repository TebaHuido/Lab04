<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input class="form-control" type="text" placeholder="Nombre"><br>
        <input class="form-control" type="number" placeholder="Precio"><br>
        <input type="file" name="image"/><br>
            <!--Selector para categoria -->
        <select class="form-control form-control-sm">
            <option>categoria 1</option>
            <option>categoria 2</option>
            <option>categoria 3</option>
        </select><br>
        <input class="form-control" type="date" placeholder="Fecha de ingreso"><br>

        <input type="radio" id="temp1" name="temporada" value="temporada1">
        <label for="temp1">temporada1</label><br>
        <input type="radio" id="temp2" name="temporada" value="temporada2">
        <label for="temp2">temporada2</label><br>
        <input type="radio" id="temp3" name="temporada" value="temporada3">
        <label for="temp3">temporada3</label><br>
        <input type="radio" id="temp4" name="temporada" value="temporada4">
        <label for="temp4">temporada4</label><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>