<?php
    session_start();
    $naam = $_SESSION['naam'];
    $leeftijd = $_SESSION['leeftijd'];

    echo $naam . ' ' . $leeftijd;
?>