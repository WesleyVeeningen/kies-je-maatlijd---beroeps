<style>
    #link {
        display: flex;
        flex-direction: row;
    }
    #link > a  {
        margin-right: 1rem;
    }
</style>

<link rel="stylesheet" href="style.css">

<?php

require 'config.php';

$naam = $_GET['Naam'];


if ($naam != "")
{

    echo "Verwijder item met ID: " . $naam . "<br/>";

    echo "<p>Weet je het zekker?<p/>";
    ?>
    <div id="link">
    <a href='verwijder_verwerk.php?Naam=<?= $naam ?>' > JA  </a> <br><br/>

    <a href='booking.php'> NEE </a>
    </div>
<?php
}
