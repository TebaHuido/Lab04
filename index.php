<?php
include ("bd.php");
if (isset($_POST['borrar'])) {
    foreach($_POST['check'] AS $value) {
        $gsent = $pdo->prepare("DELETE FROM `productos` WHERE `id` = $value");
        $gsent->execute();
    }
}
if (isset($_POST['editar'])) {
    if(sizeof($_POST['check'])== 1){
        foreach($_POST['check'] AS $value){
            header('Location: editar.php?id='.$value);
        }
    }else{
        echo '<div class="alert alert-danger" role="alert">
        Solo se puede editar un elemento a la vez!
      </div>';
    } 
}
if (isset($_POST['ver'])) {

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
    <title>Document</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script>
        $(document).ready(function(){
            $("#checkboxes #todes").click(function(){
                $("#checkboxes input[type='checkbox']").prop('checked',this.checked);
            });
        });
    </script>
</head>
<body>
    <form id="checkboxes" method="POST">
        <table class="table" >
            <thead class="thead-dark" >
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
                while($productos = $gsent->fetch()) {
                    $id=$productos['id'];
                    $n=$productos['nombre'];
                    $p=$productos['precio'];
                    $c=$productos['categoria'];
                    $t=$productos['temporada'];

                    echo "<tr><td><input type='checkbox' name='check[]' value='$id' ></td>
                    <td scope='row'>$id</td><td>$n</td><td>$p</td><td>$c</td><td>$t</td> </tr> ";
                }
            ?>
            </tbody>
        </table>
        <input type="submit" name="borrar" value="borrar seleccion">
        <input type="submit" name="editar" value="editar">
        <input type="submit" name="ver" value="ver">
        <input type="submit" name="agregar" value="agregar">
    </form>

</body>

</html>