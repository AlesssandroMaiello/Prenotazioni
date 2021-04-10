
<?php

include_once "config.php";
require 'vendor/autoload.php';

use League\Plates\Engine;

//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view', 'tpl');

//Variabili valorizzate tramite POST
$codice = $_POST['codice'];


//
$sql = "update prenotazioni set annulla = '1' where prenotazioni.codice_univoco = :codice ";
$stmt = $pdo-> prepare($sql);
$stmt -> execute(
    [
        'codice' => $codice,

    ]
);


echo $templates->render('annulla_prenotazioni',
    [
        'codice' => $codice,

    ]);



