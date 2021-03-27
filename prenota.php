<?php

//include il file config.php, che ha al suo interno il collegamento al db
include_once "config.php";

include 'phpqrcode/qrlib.php';

//variabili valorizzate tramite POST
$codice_fiscale = $_POST['codice'];
$giorno = $_POST['giorno'];

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$codice_univoco = generateRandomString();



// Generates QR Code and Stores it in directory given
//QRcode::png($codice_univoco,'qrcode.png' , 1, 4, 2);


//Query di inserimento preparata
$sql = "INSERT INTO prenotazioni VALUES(null, :codice_fiscale, :giorno,:codice_univoco )";


$sql2 = "Select count(*) as n_prenotazioni from prenotazioni where  prenotazioni.giorno = '$giorno'";

$stmt = $pdo->query($sql2);

$result = $stmt->fetchAll();


    if($result[0]['n_prenotazioni'] < 2) {

    //Inviamo la query coon i segnaposti al database che la tiene in pancia
    $stmt = $pdo->prepare($sql2);

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

echo "<h2> </br>Il tuo codice prenotazione è: $codice_univoco </h2>";


//exit(0);
}
else
{

    echo " <center><h2> E' stato raggiunto il numero massimo di prenotazioni per il giorno selezionato </br></center></h2>";
    echo '<a href= "prenota.html"> <center> Ritorna alla home </center></a>';
}






