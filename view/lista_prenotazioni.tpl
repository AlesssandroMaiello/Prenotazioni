
<?php $this->layout('main',['argomento' => 'lista delle prenotazioni']); ?>



<h1>Portale prenotazioni</h1>


    <table>
    <?php foreach($result as $row): ?>

        <tr> <td><strong> <?php echo $row['codice_fiscale'] ?>  </strong></td> <td> Data del tampone prenotato: </td>
            <td> <?php  echo $row['giorno']  ?> </td>
            <td><?php  echo $row['codice_univoco'] ?> </tr> </td>

    <?php endforeach ?>
    </table>
