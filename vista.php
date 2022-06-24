<?php
include_once'bd.php';
$gsent = $pdo->prepare('SELECT * FROM `productos`');
$gsent->execute();
$productos = $gsent->fetchALL();
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
    <form id="checkboxes">
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
                <?php foreach ($productos as $dato) : ?>
                    <tr>
                        <td><input type="checkbox" ></td>
                        <td scope="row"><?php echo $dato["id"] ?></td>
                        <td><?php echo  $dato["nombre"] ?></td>
                        <td><?php echo $dato["precio"] ?></td>
                        <td><?php echo $dato["categoria"] ?></td>
                        <td><?php echo $dato["temporada"] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </form>
    <button>editar</button>
    <button>ver</button>
    <button>eliminar</button>


</body>

</html>