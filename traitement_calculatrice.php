<?php
// Récupération des valeurs saisies dans le formulaire
$chiffre1 = isset($_POST['saisi1']) ? $_POST['saisi1'] : 0;
$chiffre2 = isset($_POST['saisi2']) ? $_POST['saisi2'] : 0;

if (!is_numeric($chiffre1) || !is_numeric($chiffre2)) {
    echo "Veuillez entrer des nombres valides dans les deux champs.";
    exit;
}

// Initialisation de la variable $resultat
$resultat = 0;

// Vérification de l'opération à effectuer
if (isset($_POST['plus'])) {
    $resultat = $chiffre1 + $chiffre2;
} elseif (isset($_POST['moins'])) {
    $resultat = $chiffre1 - $chiffre2;
} elseif (isset($_POST['multiplie'])) {
    $resultat = $chiffre1 * $chiffre2;
} elseif (isset($_POST['divise'])) {
    if ($chiffre2 == 0) {
        echo "Erreur : Division par zéro";
        exit;
    }
    $resultat = $chiffre1 / $chiffre2;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice - Résultat</title>
    <link rel="stylesheet" type="text/css" href="calculatrice.css">
</head>
<body>

<div class="calculatrice">
    <h1>Résultat</h1>

    <div class="ecran">
        <?php echo $resultat; ?>
    </div>

    <a href="index.html" class="return-btn">Retour à la calculatrice</a>
</div>

</body>
</html>
