<?php

    session_start();

    if (isset($_POST['knop'])) 
    {   if (isset($_POST=['naam'] && $_POST=['leeftijd']))
        {

        $_SESSION['naam'] = $_POST['naam'];
        $_SESSION['leeftijd'] = $_POST['leeftijd'];
            header (Location:session.php);
        }
    }

?>

<!DOCTYPE HTML>
<html>
<head>

</head>

<body>
    <form method="POST">
        <label for="naam">Naam</label>
        <input type="text" id="naam" name="naam">

        <label for="leeftijd">Leeftijd</label>
        <input type="text" id="leeftijd" name="leeftijd"><br>

        <input type="submit" name="knop">
    </form>
</body>

</html>