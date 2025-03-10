<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>

    <h1>Calculatrice simple</h1>

    <form action="traitement_calculatrice.php" method="post">
        <label for="saisi1">Votre premier chiffre :</label>
        <input type="text" name="saisi1" id="saisi1" required>
        <br/>

        <label for="saisi2">Votre deuxième chiffre :</label>
        <input type="text" name="saisi2" id="saisi2" required>
        <br/>

        <input type="submit" name="plus" value="+">
        <input type="submit" name="moins" value="-">
        <input type="submit" name="multiplie" value="X">
        <input type="submit" name="divise" value="/">
    </form>
</body>
</html>

