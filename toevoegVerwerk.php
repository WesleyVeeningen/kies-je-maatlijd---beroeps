<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1 {
            display: none   ;
        }
    </style>
</head>
<body>

</body>
</html>

<?php

?><h1><?= require 'config.php';?></h1>

<?php

if(isset($_POST['submit'])) {

    $naam = $_POST['InvNaam'];
    $date = $_POST['invDatum'];
    $tijd = $_POST['invTime'];
    $pers = $_POST['invPers'];

    $query = "INSERT INTO booking";
    $query .= "(Naam, Datum, Tijd, Personen)";
    $query .= "VALUES ('{$naam}', '{$date}', '{$tijd}', '{$pers}')";

    $result = mysqli_query($mysqli, $query);

    if ($result)
    {
        echo "Het item is toegevoegd<br/>";
    }
    else
    {
        echo "FOUT bij toevoegen<br/>";
        echo $query . "<br/>";
        echo mysqli_error($mysqli);
    }

    echo "<a href='booking.php'>OVERZICHT</a>";
}

