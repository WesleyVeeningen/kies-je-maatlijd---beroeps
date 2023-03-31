<?php
require 'config.php';

$query = 'SELECT * FROM  booking';

$result = mysqli_query($mysqli, $query);



if (mysqli_num_rows($result) > 0) { ?>

    <table border="1px" bgcolor="#add8e6">
        <tr>
            <th>Naam</th>
            <th>DAtum</th>
            <th>Tijd</th>
            <th>Personen</th>

        </tr>
        <?php
        while ($item = mysqli_fetch_assoc($result)){ ?>

            <tr>
                <td><?= $item['Naam']; ?></td>

                <td><?= $item['Datum']; ?></td>

                <td><?= $item['Tijd']; ?></td>

                <td><?= $item['Personen']; ?></td>

                <td><a href='verwijder.php?Naam=<?= $item['Naam']?>'>verwijder</a></td>
            </tr>

        <?php  }  ?>

    </table>hey

        <a href="toevoegForm.php">Book tafel</a>
<?php }