<?php

//Maak een klein programmaatje met een for-loop waarin alle getallen tussen 0 en 50 worden afgedrukt. 
for ($i = 0; $i <= 50; $i++)
{
    echo $i . "";
}

//Maak een array met namen van klasgenoten
$klasgenoten = array('Lionel','Don','Luca','Milan','Zee','Zakaria','Paul','Ghor','Levinio','Yakoubi');
foreach ($klasgenoten as $klasgenoot) {
    echo $klasgenoot . "<br>";
}

//Voer onderstaande code uit en verander deze code door de regels 4 t/m 15 met behulp een loop af te drukken.
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

echo 'Maand 1 is '.$maanden[0].'.<br />';
echo 'Maand 2 is '.$maanden[1].'.<br />';
echo 'Maand 3 is '.$maanden[2].'.<br />';
echo 'Maand 4 is '.$maanden[3].'.<br />';
echo 'Maand 5 is '.$maanden[4].'.<br />';
echo 'Maand 6 is '.$maanden[5].'.<br />';
echo 'Maand 7 is '.$maanden[6].'.<br />';
echo 'Maand 8 is '.$maanden[7].'.<br />';
echo 'Maand 9 is '.$maanden[8].'.<br />';
echo 'Maand 10 is '.$maanden[9].'.<br />';
echo 'Maand 11 is '.$maanden[10].'.<br />';
echo 'Maand 12 is '.$maanden[11].'.<br />';

for ($i = 4; $i < 15; $i++)
{
    echo $maanden[$i] . "<br>";
}

?>