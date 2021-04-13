<?php $this->layout('main',['argomento' => 'Login']); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prenotazioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
</head>
<body>
<form action="esito_login.php" method="POST">
    <fieldset>
        <legend>Inserisci la prenotazione</legend>
        <label for="username">Nome utente</label>
        <input type="text" id="username" placeholder="Nome utente" name="username">
        <label for="password">Password</label>
        <input type="text" id="password" placeholder="Password" name="password">
        <label for="password1">Conferma password</label>
        <input type="text" id="password1" placeholder="Password" name="password1">
        <input type="submit" value="Accedi">
    </fieldset>
</form>
</body>
