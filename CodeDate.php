<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Affichage de la date en PHP</title>
</head>
<body>
    <p>
        <?php
        echo "Nous sommes le <strong>". date("j") . " " . date("F") . " " . date("Y") . "</strong>".".";  
        echo "<br>"; 
        echo "Il est " . date("H") . "h " . date("i") . "min et " . date("s") . " secondes.";  // Affiche l'heure, les minutes et les secondes
        ?>
    </p>
</body>
</html>
