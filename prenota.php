<?php

//include il file config.php, che ha al suo interno il collegamento al db
include_once "config.php";

//variabili valorizzate tramite POST
$codice_fiscale = $_POST['codice'];
$giorno = $_POST['giorno'];

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$codice_univoco = generateRandomString();

//Query di inserimento preparata
$sql = "INSERT INTO prenotazioni VALUES(null, :codice_fiscale, :giorno,:codice_univoco )";

//Inviamo la query coon i segnaposti al database che la tiene in pancia
$stmt = $pdo->prepare($sql);

//Inviamo i dati concreti (con vettore) che verranno messi al posto del segnaposto
$stmt->execute(
    [
        'codice_fiscale' => $codice_fiscale,
        'giorno' => $giorno,
        'codice_univoco' => $codice_univoco
    ]
);

//crea un header rimandato al browser, che gli dice di mandare la sua richiesta a lista_prenotazioni
//Ridirige il browser verso la pagina indicata nella location

//chiama la pagina della lista delle prenotazioni
//header( 'Location: lista_prenotazioni.php');
//exit(0);

echo "<h2> </br>Il tuo codice prenotazione è: $codice_univoco</h2>";





