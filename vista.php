<?php
include_once 'bd.php';
$gsent = $pdo->prepare('SELECT * FROM `productos` WHERE `id`= ' . $_GET['id']);
$gsent->execute();
$producto = $gsent->fetchALL();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css ">
    <link rel="stylesheet" href="./css/style.css">
    <title>Ver documento</title>
</head>

<body>
    <h1>Mostrando Articulo</h1>
    <h2>Información sobre el articulo ingresado: </h2>
    <div class="container">
        <div class="row">
            <div class="col">
            <table class="table">
  <tbody class="tbo">
    <tr>
      <td class="separaciontabla">Nombre</td>
      <td class="separaciontabla2"><?php echo $producto[0]['nombre'] ?></td>
    </tr>
    <tr>
      <td class="separaciontabla">Precio</td>
      <td class="separaciontabla2"><?php echo $producto[0]['precio'] ?></td>
    </tr>
    <tr>

      <td class="separaciontabla">Descripción</td>
      <td class="separaciontabla2"><?php echo $producto[0]['descripcion'] ?></td>
    </tr>
    <tr>
      <td class="separaciontabla">Fecha de ingreso</td>
      <td class="separaciontabla2"><?php echo $producto[0]['fechaingreso'] ?></td>
    </tr>
    <tr>
      <td class="separaciontabla">Estación</td>
      <td class="separaciontabla2"><?php echo $producto[0]['temporada'] ?></td>
    </tr>
    <tr>

      <td class="separaciontabla">Categoría</td>
      <td class="separaciontabla2"><?php echo $producto[0]['categoria'] ?></td>
    </tr>
  </tbody>
</table> 
            </div>
    
            <div class="col">
                <img src="data:image/jpg;base64,<?php echo base64_encode($producto[0]['imagen']); ?>" height="200px"><br>

            </div>

        </div>
    </div>


</body>

</html>