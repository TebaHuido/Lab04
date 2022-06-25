<?php
include("bd.php");
if (isset($_POST['borrar'])) {
    foreach ($_POST['check'] as $value) {
        $gsent = $pdo->prepare("DELETE FROM `productos` WHERE `id` = $value");
        $gsent->execute();
    }
}
if (isset($_POST['editar'])) {
    if (sizeof($_POST['check']) == 1) {
        foreach ($_POST['check'] as $value) {
            header('Location: editar.php?id=' . $value);
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Solo se puede editar un elemento a la vez!
      </div>';
    }
}
if (isset($_POST['ver'])) {
    if (sizeof($_POST['check']) == 1) {
        foreach ($_POST['check'] as $value) {
            header('Location: vista.php?id=' . $value);
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Solo se puede visualizar un elemento a la vez!
      </div>';
    }
}
if (isset($_POST['agregar'])) {
    header('Location: agregar.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css ">
    <link rel="stylesheet" href="./css/style.css">
    <title>Lista</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script>
        $(document).ready(function() {
            $("#checkboxes #todes").click(function() {
                $("#checkboxes input[type='checkbox']").prop('checked', this.checked);
            });
        });
    </script>
</head>

<body>

    <h1> Mostrando datos </h1>
    <form id="checkboxes" method="POST">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><input type="checkbox" id="todes"></th>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Temporada</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $gsent = $pdo->prepare('SELECT * FROM `productos`');
                $gsent->execute();
                while ($productos = $gsent->fetch()) {
                    $id = $productos['id'];
                    $n = $productos['nombre'];
                    $p = $productos['precio'];
                    $c = $productos['categoria'];
                    $t = $productos['temporada'];

                    echo "<tr><td><input type='checkbox' name='check[]' value='$id' ></td>
                    <td scope='row'>$id</td><td>$n</td><td>$p</td><td>$c</td><td>$t</td> </tr> ";
                }
                ?>
            </tbody>
        </table>
        <input type="submit" class="btn btn-primary pill" name="borrar" value="borrar seleccion">
        <input type="submit" class="btn btn-primary pill" name="editar" value="editar">
        <input type="submit" class="btn btn-primary pill" name="ver" value="ver">
        <input type="submit" class="btn btn-primary pill" name="agregar" value="agregar">
    </form>

</body>

</html>