<?php
// Récupération des valeurs saisies dans le formulaire
$chiffre1 = isset($_POST['saisi1']) ? $_POST['saisi1'] : 0;
$chiffre2 = isset($_POST['saisi2']) ? $_POST['saisi2'] : 0;

if (!is_numeric($chiffre1) || !is_numeric($chiffre2)) {
    echo "entrer des nombres valides dans les deux champs.";
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
        echo "Erreur : Division par zéro!";
        exit;
    }
    $resultat = $chiffre1 / $chiffre2;
}

// Affichage du résultat
echo "Le resultat de l'operation est : " . $resultat;
?>
