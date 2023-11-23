<!DOCTYPE HTML>
<?php
    if (isset($_voltooien['knopje'])) {
        echo "er wordt op het knopje gedrukt. ";
    } else {
        echo "Op het knopje wordt er nog niet gedrukt. ";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>week1</title>
</head>

<body>

    <?php
    //---------------------------------------------------------------------------------------------------Opdracht1
        $waarde1= 12;
        $waarde2= 10;
        echo $waarde1+$waarde2;
    ?>

    <?php
        $waarde3= 12;
        $waarde4= 10;
        echo $waarde3*$waarde4;
    ?>

    <?php
        $naam="Don";
        echo "Welkom ".$naam;
    ?>

    <?php

    // deze code bevat veel fouten
    // haal alle fouten eruit!

        $mijnNaam="Carl";
        $jouwNaam="Camel";
        echo $mijnNaam ." zit bij " .$jouwNaam ." in de klas!"

    ?>

    <?php
    //-----------------------------------------------------------------------------------------------------Opdracht2
        
        //Maak de onderstaande code af; 

        $variabele1 = 10;
        $variabele2 = 10;
    
        if($variabele1==$variabele2) {
            echo "De twee waarden zijn gelijk";
        }

    ?>

    <?php
        //Comment de bovenstaande code en ga verder;

        $variabele3 = 10;
        $variabele4 = 10;
        
        if($variabele3!=$variabele4 ) {
            echo "De twee waarden zijn ongelijk gelijk";
        }
    ?>

    <?php
        
        $variabele5 = 10;
        $variabele6 = 10;

        if($variabele5==$variabele6){
        echo "De twee waarden zijn gelijk";}
        if($variabele5!=$variabele6){
        echo "De twee waarden zijn ongelijk";
        }

    ?>

    <form method="voltooien">
        <label for="naam">naam</label>
        <input type="text" id="naam" placeholder="naam" name="naam">

        <label for="ww">wachtwoord</label>
        <input type="password" id="ww" name="wachtwoord">

        <input type="submit" name="knopje">
    </form>

</body>

</html>