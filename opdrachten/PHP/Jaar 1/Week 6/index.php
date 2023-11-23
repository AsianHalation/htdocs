<?php

//Maak gebruik van een ingebouwde PHP functie en haal de tijd van vandaag op. Maak daarna gebruik van een if condition\

$datum = date("h");

if ($datum < 12) 
{
    echo("goedemorgen") . "<br>";
}   
else if ($datum >= 12 && $datum <= 18  )
    {
        echo ("goedemiddag") . "<br>";
    }
    else 
    {
        echo ("goedenavond") . "<br>";
    }

//Maak zelf een functie aan met 2 parameters die het gemiddelde van 2 getallen berekent en weergeeft.
$waarde1 = 10;
$waarde2 = 30;
function gemiddelde($waarde1, $waarde2) 
{
    $gemiddelde = ($waarde1+ $waarde2) / 2;
    echo ("$gemiddelde") . "<br>";
}

gemiddelde($waarde1,$waarde2);


//Maak gebruik van de ingebouwde PHP-functies om de huidige datum op te halen. Schrijf een functie die berekent hoeveel dagen er nog over zijn tot het einde van het jaar.
//HELP IK weet het niet
$datumnu = date("d-m-Y");
$datumeind = date("end");

//Maak een functie die een array met strings accepteert. De functie moet de lengte van elke string in de array berekenen en de totale lengte van alle strings samen retourneren.

$Milanus = array('Mochi', 'Lionel', 'Don', 'Milan');

function lengte($array) 
{
    $stringlengte = 0;

    foreach ($array as $string)
    {
        $stringlengte += strlen($string);
    }
    return $stringlengte;
}

$stringlengte = lengte($Milanus);

echo "lengte is= " . $stringlengte;

?>