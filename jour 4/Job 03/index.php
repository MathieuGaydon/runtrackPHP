<?php
// Compter uniquement les champs non vides dans $_POST
$non_vide_count = 0;
foreach ($_POST as $value) {
    if (!empty($value)) {
        $non_vide_count++;
    }
}
echo "Le nombre d'arguments non vides envoyés via POST est : " . $non_vide_count;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de POST</title>
</head>
<body>

    <h2>Formulaire de test</h2>
    <form method="POST" action="">
        <label for="arg1">Argument 1 :</label>
        <input type="text" name="arg1" id="arg1"><br><br>

        <label for="arg2">Argument 2 :</label>
        <input type="text" name="arg2" id="arg2"><br><br>

        <label for="arg3">Argument 3 :</label>
        <input type="text" name="arg3" id="arg3"><br><br>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
