<?php

//dice a livello dello script che gli errori verranno mostrati e che non verranno loggati
ini_set("display_errors", "1");
ini_set("log_errors", "0");

$host = 'localhost';
$db = 'prenotazioni';
$user = 'root';
$pass = '';

//stringa di connessione
$dsn = "mysql:host=$host;dbname=$db;";

$pdo = new PDO($dsn, $user, $pass);

//variabili valorizzate tramite POST
$codice_fiscale = $_POST['codice'];
$giorno = $_POST['giorno'];

//Query di inserimento preparata
$sql = "INSERT INTO prenotazioni VALUES(null, :codice_fiscale, :giorno)";

//Inviamo la query coon i segnaposti al database che la tiene in pancia
$stmt = $pdo->prepare($sql);

//Inviamo i dati concreti (con vettore) che verranno messi al posto del segnaposto
$stmt->execute(
    [
        'codice_fiscale' => $codice_fiscale,
        'giorno' => $giorno
    ]
);






