<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prenotazioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
</head>
<body>
<center>
    <h1>Portale prenotazioni</h1>
</center>
<h2> <center> Prenotazioni di oggi </center> </h2>
</br>
<ul>
    <?php foreach($result as $row): ?>
    <table>
        <tr> <td><strong> <?php echo $row['codice_fiscale'] ?>  </strong></td> <td> Data del tampone prenotato: </td>
            <td> <?php  echo $row['giorno']  ?> </td>
            <td><?php  echo $row['codice_univoco'] ?> </tr> </td>
    </table>
    <?php endforeach ?>
</ul>

</body>
</html>