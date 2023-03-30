<?php
require 'config.php';

$query = 'SELECT * FROM  verprog1_agenda';

$result = mysqli_query($mysqli, $query);



if (mysqli_num_rows($result) > 0) { ?>

    <table border="1px" bgcolor="#add8e6">
        <tr>
            <th>ID</th>
            <th>Onderwerp</th>
            <th>Inhoud</th>
            <th>Begindatum</th>

        </tr>
        <?php
        while ($item = mysqli_fetch_assoc($result)){ ?>

            <tr>
                <td><?= $item['Naam']; ?></td>

                <td><?= $item['Datum']; ?></td>

                <td><?= $item['Tijd']; ?></td>

                <td><?= $item['Personen']; ?></td>

                <td><a href='verwijder.php?id=<?= $item['ID']?>'>verwijder</a></td>
                <td><a href='pasaan.php?id=<?= $item['ID']?>'>pas aan</a></td>
            </tr>

        <?php  }  ?>

    </table>

<?php }