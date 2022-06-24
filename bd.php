<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=lab04', 'root', '');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>