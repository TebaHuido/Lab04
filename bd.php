<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=quokka', 'root', '');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>