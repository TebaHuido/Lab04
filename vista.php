<?php
include_once'bd.php';
$gsent = $pdo->prepare('SELECT * FROM `productos` WHERE `id`= '.$_GET['id']);
$gsent->execute();
$producto = $gsent->fetchALL();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $producto[0]['nombre']?></h3>
    <img src="data:image/jpg;base64,<?php echo base64_encode($producto[0]['imagen']);?>" height="200px"><br>
    <h4><?php echo $producto[0]['precio']?></h4>
    <h4><?php echo $producto[0]['descripcion']?></h4>
    <h4><?php echo $producto[0]['fechaingreso']?></h4>
    <h4><?php echo $producto[0]['temporada']?></h4>
    <h4><?php echo $producto[0]['categoria']?></h4>
</body>
</html>