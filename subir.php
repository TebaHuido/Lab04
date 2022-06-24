<?php
include ("bd.php");
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$gsent=$pdo->prepare("INSERT INTO `productos` (`id`, `nombre`, `precio`, `categoria`, `temporada`, `fechaingreso`, `descripcion`,`imagen`) VALUES (NULL,'". $_POST['nombre']."','". $_POST['precio']."','".$_POST['categoria']."','". $_POST['temporada']."','". $_POST['fecha']."','". $_POST['descripcion']."','". $imagen."')");
$gsent->execute();
?>