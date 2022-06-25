<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css ">
    <link rel="stylesheet" href="./css/style.css">

    <title>Agregar</title>
</head>

<body>
    <form action="./subir.php" method="POST" enctype="multipart/form-data">
        <div class="form-group ">
            <div class="col-8">

                <h1> Bienvenidos </br></h1>
                <h2> Aqui debes ingresar los datos de la comida </h2>
                <h3>Ingrese el nombre:</h3>
                <div class="col-8">
                    <input required name="nombre" class="form-control" type="text" placeholder="Nombre"><br>
                </div>
                <h3>Ingrese el precio:</h3>
                <div class="col-8">
                    <input required name="precio" class="form-control" type="number" placeholder="Precio"><br>
                </div>
                <h3>Seleccione la imagen a subir: </h3>

                <input required type="file" class="form-control-file" name="imagen" /><br>
                <textarea required name="descripcion" rows="4" cols="50" placeholder="Descripcion del producto"></textarea><br>
                <!--Selector para categoria -->
                <h3> Seleccione la categoría a la que pertenece: </h3>
                <div class="col-3">
                    <select required name="categoria" class="form-control form-control-sm">
                        <option>Cena</option>
                        <option>Almuerzo</option>
                        <option>Desayuno</option>
                    </select><br>
                </div>
                <h3> Seleccione la fecha de ingreso: </h3>
                <div class="col-3">
                    <input required name="fecha" type="date" placeholder="Fecha de ingreso"><br>
                </div>
                <h3> Seleccione la estación a la que pertenece :</h3>

                <div class="form-check">
                    <input required type="radio" class="form-check-input" id="temp1" name="temporada" value="Invierno">
                    <label class="form-check-label" for="temp1">Invierno</label><br>
                    <input required type="radio" class="form-check-input" id="temp2" name="temporada" value="Primavera">
                    <label class="form-check-label" for="temp2">Primavera</label><br>
                    <input required type="radio" class="form-check-input" id="temp3" name="temporada" value="Verano">
                    <label class="form-check-label" for="temp3">Verano</label><br>
                    <input required type="radio" class="form-check-input" id="temp4" name="temporada" value="Otono">
                    <label class="form-check-label" for="temp4">Otoño</label><br><br>
                </div>
                <input type="submit" class="btn btn-primary pill" value="Submit">
            </div>
        </div>
    </form>
</body>

</html>