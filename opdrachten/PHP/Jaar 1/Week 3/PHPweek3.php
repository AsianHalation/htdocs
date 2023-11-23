<?php
    // Deel1
    // Voeg een waarde toe zonder de regel zoals die hierboven is gegeven aan te passen. Dus maakt een tweede regel waarin je een waarde toevoegt aan het array.
    $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

    $myArray[]='tram';

    // Druk alle waarden van het array af.
    print_r(array_count_values($myArray));

    // Deel2
    // Maak een programmaatje met dit array en bepaal het aantal elementen en druk dat af.
    $myArray = array('auto','fiets','brommer','bus','vliegtuig','trein');
    
    // Voeg een element toe aan het array en de output moet nu vanzelf veranderen
    $myArray[]='tram';
    echo count($myArray);

    // Deel3
    // Bepaal wat er wordt afgedrukt

    // regel 2= bar
    // regel 5= 4
    // regel 8= Toyota
    // regel 9= 3
    // regel 12= 5
    // regel 19= 4

    // Deel 4
    // Regel 6 en 7 worden gecombineerd tot één regel met één commando,

    $cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

    $aantalCijfers = count($cijfersPHP);
    $gemiddelde = array_sum($cijfersPHP) / $aantalCijfers;

    $resultaat = array_merge((array)$aantalCijfers, (array)$gemiddelde);
    echo "Gemiddelde is: ".(round($gemiddelde));

    //zorg ervoor dat het gemiddelde uit het bovenstaande voorbeeld wordt afgerond op 1 decimaal

?>