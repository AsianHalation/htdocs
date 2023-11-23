<?php

    //Start de Session en geef de 2 variabele op de nieuwe pagina weer.
    session_start();

    $naam = $_SESSION['naam']; echo $naam . "<br>";
    $email = $_SESSION['email']; echo $email. "<br>";
?>