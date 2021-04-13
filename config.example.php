<?php

//file che contiene il collegamento al database
//Creare un file config.php e inserire le seguenti righe adattandole alla propria configurazione.

//dice a livello dello script che gli errori verranno mostrati e che non verranno loggati
ini_set("display_errors", "1");
ini_set("log_errors", "0");

$host = 'your_host';
$db = 'your_db';
$user = 'your_username';
$pass = 'your_password';

//stringa di connessione
$dsn = "mysql:host=$host;dbname=$db;";

$pdo = new PDO($dsn, $user, $pass);

//lancia eccezione il programma piuttosto che mostrare il fatal error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_star();