<?php
$count = 0;

// Parcours de la superglobale $_GET pour compter les arguments non vides
foreach ($_GET as $key => $value) {
    if (!empty($value)) {
        $count++;
    }
}
echo "Nombre d'arguments GET (non vides) : " . $count;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test des arguments GET</title>
</head>
<body>
    <h2>Formulaire GET</h2>
    <form action="" method="get">
        <label for="arg1">Argument 1:</label>
        <input type="text" id="arg1" name="arg1"><br><br>

        <label for="arg2">Argument 2:</label>
        <input type="text" id="arg2" name="arg2"><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
