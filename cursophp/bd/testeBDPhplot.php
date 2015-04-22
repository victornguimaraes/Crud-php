<?php
include 'phplot-6.1.0/phplot.php';

$pdo = new PDO ( 'mysql:host=localhost;dbname=crud_php;charset=utf8', 'root', 'baleia' );

$res = $pdo->query ( "select count(p1) from Perguntas where p1='Analfabeto';" );
$obj = $res->fetch ();

echo "<br>lol:" . $obj ["count(p1)"];
?>

