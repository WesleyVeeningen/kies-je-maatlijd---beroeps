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
        form {
            border: 1px solid black;
            width: fit-content;
            height: fit-content;
            padding: 2% 2% 2% 2%;
            backgroud: white;
        }
        form > label input select {
            position: absolute;
            color: red;
            margin-right: 10rem;
        }
        select {
            width: 7%;
        }
        #inhoud {
            display: flex;
        }
        form > label {
            margin-right: 5%;
        }
    </style>
</head>
<body>

<form name="agendaFormulier" method="post" action="toevoegVerwerk.php">
    <h1>Book hier je tafel</h1>
    <p></p>
    <div id="inhoud">
    <label for="InvNaam">Naam: </label>
    <input type="text"  name="InvNaam">
    </div>
    <p></p>
    <label for="Begindatum">Datum: </label>
    <input type="date" name="invDatum"><br>
    <p></p>
    <label for="Tijd">Tijd: </label>
    <input type="time" name="invTime"><br>
    <p></p>
    <label for="personen">Aantal Personen: </label>
    <input type="number" name="invPers">
    <br>
    <br>
    <input type="submit" name="submit" value="Voeg toe aan agenda">
</form>
<a href="booking.php"><button id="btn-data-add">OVERZICHT</button></a>
</body>
</html>