<?php

//include il file config.php, che ha al suo interno il collegamento al db
include_once "config.php";

//Query di inserimento preparata
$sql = "SELECT * FROM prenotazioni";

$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();
echo "<pre>";
var_dump($result);
echo "</pre>";