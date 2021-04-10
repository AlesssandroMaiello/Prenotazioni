<?php

include_once "config.php";
require 'vendor/autoload.php';

use League\Plates\Engine;

//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view', 'tpl');

//Variabili valorizzate tramite POST
$username = $_POST['username'];
$password = $_POST['password'];
$conferma_password = $_POST['password1'];


$sql = "Insert into  utenti values(null, :username, :password)";

$stmt = $pdo->prepare($sql);

if($password === $conferma_password )
{
    $password_cifrata = password_hash($password, PASSWORD_DEFAULT);

    $stmt->execute(
        [
            'username' => $username,
            'password' => $password_cifrata

        ]
    );

}

echo $templates->render('autenticazione',
    [
        'username' => $username,
        'password' => $password_cifrata

    ]);

