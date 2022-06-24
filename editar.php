<?php
include_once'bd.php';
$gsent = $pdo->prepare('SELECT * FROM `productos` WHERE `id`= 4');
$gsent->execute();
$producto = $gsent->fetchALL();
if (isset($_POST['editar'])) {
    if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
        $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $gsent2=$pdo->prepare("UPDATE `productos` SET `nombre` = '".$_POST('nombre')."', `precio` = '".$_POST['precio']."', `categoria` = '".$_POST['precio']."', `temporada` = 'temporada4s', `fechaingreso` = '1999-09-15', `descripcion` = 'ahhhhhhhha' WHERE `productos`.`id` = 3");
        $gsent2->execute();
    }else{
        $gsent2=$pdo->prepare("UPDATE INTO `productos` (`nombre`, `precio`, `categoria`, `temporada`, `fechaingreso`, `descripcion`) VALUES ('". $_POST['nombre']."','". $_POST['precio']."','".$_POST['categoria']."','". $_POST['temporada']."','". $_POST['fecha']."','". $_POST['descripcion']."')WHERE id :'".$producto[0]['id'].'"');
        $gsent2->execute();
    }
}

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
<form method="POST" enctype="multipart/form-data">
        <input required name="nombre" class="form-control" type="text" placeholder="Nombre" value="<?php echo $producto[0]['nombre']?>"><br>
        <input required name="precio" class="form-control" type="number" placeholder="Precio" value="<?php echo $producto[0]['precio']?>"><br>
        <img src="data:image/jpg;base64,<?php echo base64_encode($producto[0]['imagen']);?>" height="200px"><br>
        <input type="file" name="imagen"/><br>
        <textarea required name="descripcion"  rows="4" cols="50" placeholder="Descripcion del producto" ><?php echo $producto[0]['descripcion']?></textarea><br>
            <!--Selector para categoria -->
        <select required name="categoria" class="form-control form-control-sm">
            <option <?php if ($producto[0]['categoria'] == 'categoria 1') echo 'selected'?>>categoria 1</option>
            <option <?php if ($producto[0]['categoria'] == 'categoria 2') echo 'selected'?>>categoria 2</option>
            <option <?php if ($producto[0]['categoria'] == 'categoria 3') echo 'selected'?>>categoria 3</option>
        </select><br>
        <input required name="fecha" class="form-control" type="date" placeholder="Fecha de ingreso"value="<?php echo $producto[0]['fechaingreso']?>"><br>

        <input required type="radio" id="temp1" name="temporada" value="temporada1" <?php if ($producto[0]['temporada'] == 'temporada1') echo 'checked="checked"'; ?> >
        <label for="temp1">temporada1</label><br>
        <input required type="radio" id="temp2" name="temporada" value="temporada2"  <?php if ($producto[0]['temporada'] == 'temporada2') echo 'checked="checked"'; ?>>
        <label for="temp2">temporada2</label><br>
        <input required type="radio" id="temp3" name="temporada" value="temporada3" <?php if ($producto[0]['temporada'] == 'temporada3') echo 'checked="checked"'; ?>>
        <label for="temp3">temporada3</label><br>
        <input required type="radio" id="temp4" name="temporada" value="temporada4" <?php if ($producto[0]['temporada'] == 'temporada4') echo 'checked="checked"'; ?>>
        <label for="temp4">temporada4</label><br><br>
        <input name="editar" type="submit" value="Submit">
    </form>
</body>
</html>