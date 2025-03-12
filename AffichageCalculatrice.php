<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
    <link rel="stylesheet" type="text/css" href="calculatrice.css">
</head>
<body>

<div class="calculatrice">
    <form action="traitement_calculatrice.php" method="post">
        <div class="ecran">
            <input type="text" name="saisi1" required>
        </div>
        <div class="ecran">
            <input type="text" name="saisi2" required>
        </div>

        <div class="buttons">
            <button type="submit" name="plus" class="button operator">+</button>
            <button type="submit" name="moins" class="button operator">−</button>
            <button type="submit" name="multiplie" class="button operator">×</button>
            <button type="submit" name="divise" class="button operator">÷</button>
        </div>

        <a href="traitement_calculatrice.php" class="return-btn">Voir le Résultat</a>
    </form>
</div>

</body>
</html>
