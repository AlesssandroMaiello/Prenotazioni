
<?php $this->layout('main',['argomento' => 'Prenotazioni di oggi']); ?>



<ul>
    <?php foreach($result as $row): ?>
    <table>
        <tr> <td><strong> <?php echo $row['codice_fiscale'] ?>  </strong></td> <td> Data del tampone prenotato: </td>
            <td> <?php  echo $row['giorno']  ?> </td>
            <td><?php  echo $row['codice_univoco'] ?> </tr> </td>
    </table>
    <?php endforeach ?>
</ul>

