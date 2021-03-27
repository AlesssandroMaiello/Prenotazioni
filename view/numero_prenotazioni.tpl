<?php $this->layout('main',['argomento' => 'Numero di prenotazioni']); ?>

    <table>
        <thead> <td> Giorno </td> <td> Numero prenotazioni</td>
        </thead>
        <tbody>

    <?php foreach($result as $row): ?>
    <tr> <td><?php  echo $row['giorno']  ?> </td>
        <td> <?php  echo $row['n_prenotazioni']  ?> </td> </tr>

    <?php endforeach ?>
        </tbody>
    </table>
    <?php $this->layout('main',['argomento' => 'lista delle prenotazioni']); ?>