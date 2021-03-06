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

//variabili al momento costanti, poi verranno prese tramite POST
$codice_fiscale = 'BGTLSN00N00B175G';
$giorno = '2021-03-06';

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






