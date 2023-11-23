<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toets</title>
</head>

<body>

    <?php
    // De toets bestaat uit meerdere onderdelen. Maak een duidelijk verschil tussen de onderdelen met comments.
    // Voeg comments toe wat je doet.


    // Onderdeel 1
    // Maak twee variabele een geef daar 2 verschillende getallen mee.
    // Tel daarna 2 getallen bij elkaar op.
    // Print het resultaat met een tekst als "Het resultaat is ...".
        $variabele1 = 10;
        $variabele2 = 20;

        echo "Het resultaat is ". $variabele1+$variabele2;
    

    
    // Onderdeel 2
    // Maak een formulier aan met het method POST.
    // Vraag aan de gebruiker zijn gebruikersnaam en wachtwoord.
    // Maak gebruik van een if else condition.
    // Zorg ervoor dat de user zijn gegevens kan zien als het formulier wordt vezonden.
    ?>
        <?php
            

            if (isset($_POST['versturen'])) {
                $naam = $_POST["naam"];
                $ww = $_POST["wachtwoord"];
                echo "Het is verstuurd ". $ww. $naam;
            }
        ?>
          
        <form method="POST">
            <label for="naam">gebruikersnaam</label>
            <input type="text" id="naam" placeholder="naam" name="naam">

            <label for="wachtwoord">wachtwoord</label>
            <input type="password" id="wachtwoord" name="wachtwoord">

            <input type="submit" name="versturen">
        </form>

    
    
    <?php
    // Onderdeel 3
    // Maak een array aan met de 12 maanden er in.
    // Maak gebruik van een php funtie die de het aantal waarden van een array telt.
    // Maak daarna gebruik van een for of foreach loop om alle maanden op een volgerde onder elkaar te tonen.
    $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 
    echo count($maanden);

    for ($i = 0; $i < count($maanden); $i++)
{
    echo $maanden[$i] . "<br>";
}

    ?>

</body>


</html>