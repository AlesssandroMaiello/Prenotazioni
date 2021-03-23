<?php

//include il file config.php, che ha al suo interno il collegamento al db
include_once "config.php";
require 'vendor/autoload.php';

use League\Plates\Engine;
$giorno_iniziale = $_POST['giorno_iniziale'];
$giorno_finale = $_POST['giorno_finale'];

//creami il motore di template cosi quando chiamo la funzione render andrà a cercare i file .tpl
//viene creato l'oggetto per la gestione dei template.

$templates = new Engine('./view','tpl');

$sql = "INSERT INTO prenotazioni VALUES(null, :giorno_iniziale , :giorno_finale )";

//Query di inserimento preparata
$sql2 = "SELECT Count(*) as n_prenotazioni, giorno from prenotazioni group by giorno having giorno between '$giorno_iniziale' and '$giorno_finale'";

$stmt = $pdo->query($sql2);

$result = $stmt->fetchAll();

$stmt = $pdo->prepare($sql2);

$stmt->execute(
    [
        'giorno_iniziale' => $giorno_iniziale,
        'giorno_finale' => $giorno_finale
    ]
);


//Rendo un template che mi visualizza la tabella
echo $templates->render('numero_prenotazioni', ['result' => $result]);