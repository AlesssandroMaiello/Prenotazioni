<?php

//include il file config.php, che ha al suo interno il collegamento al db
include_once "config.php";
require 'vendor/autoload.php';

use League\Plates\Engine;

//creami il motore di template cosi quando chiamo la funzione render andrà a cercare i file .tpl
//viene creato l'oggetto per la gestione dei template.

$templates = new Engine('./view','tpl');

//Query di inserimento preparata
$sql = "SELECT * FROM prenotazioni";

$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();


//Rendo un template che mi visualizza la tabella
echo $templates->render('lista_prenotazioni', ['result' => $result]);