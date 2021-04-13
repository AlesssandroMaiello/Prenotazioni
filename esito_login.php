<?php


include_once "config.php";
require 'vendor/autoload.php';

use League\Plates\Engine;

//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view', 'tpl');

//Variabili valorizzate tramite POST
$username = $_POST['username'];
$password = $_POST['password'];



$sql = "SELECT * FROM utenti where username = :username";

$stmt = $pdo->prepare($sql);


    $stmt->execute(
        [
            'username' => $username

        ]
    );
    $riga = $stmt->fetch();
    if($riga == false)
    {
        echo $templates->render('login_fallito', ['username' => $username]);

} else {

    $pass_hash = $riga['password'];
    //la password è corretta
    if(password_verify($password, $pass_hash))
    {
        echo $templates->render('utente_autenticato', ['username' => $username]);
    }
    //la password è sbagliata
    else{
        echo $templates->render('login_fallito', ['username' => $username]);

    }

}
