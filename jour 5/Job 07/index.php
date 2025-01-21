<?php
function appliquerTransformation($texte, $option) {
    switch ($option) {
        case 'gras':
            // Mettre en gras les mots commençant par une majuscule
            return preg_replace_callback('/\b([A-Z][a-z]*)\b/', function($matches) {
                return '<b>' . $matches[0] . '</b>';
            }, $texte);

        case 'cesar':
            // Applique un décalage César sur chaque caractère
            return cesarCipher($texte, 2);

        case 'plateforme':
            // Remplace par _ les mots finissant par "me"
            return preg_replace('/\b\w+me\b/', '_', $texte);

        default:
            return $texte;
    }
}
function cesarCipher($texte, $decalage = 2) {
    $resultat = '';
    // Parcours de chaque caractère du texte
    for ($i = 0; $i < strlen($texte); $i++) {
        $caractere = $texte[$i];
        // Si c'est une lettre minuscule
        if (ctype_lower($caractere)) {
            // Appliquer le décalage et s'assurer qu'il reste dans l'alphabet
            $resultat .= chr(((ord($caractere) - ord('a') + $decalage) % 26) + ord('a'));
        }
        // Si c'est une lettre majuscule
        elseif (ctype_upper($caractere)) {
            // Appliquer le décalage et s'assurer qu'il reste dans l'alphabet
            $resultat .= chr(((ord($caractere) - ord('A') + $decalage) % 26) + ord('A'));
        }
        else {
            $resultat .= $caractere;
        }
    }

    return $resultat;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de transformations</title>
</head>
<body>

    <form method="POST">
        <label for="texte">Entrez votre texte :</label>
        <input type="text" id="texte" name="texte" required><br><br>

        <label for="option">Choisissez une transformation :</label>
        <select id="option" name="option">
            <option value="gras">Gras (Mots commençant par une majuscule)</option>
            <option value="cesar">César (Décalage de caractères)</option>
            <option value="plateforme">Plateforme (Remplacer les mots finissant par "me" par "_")</option>
        </select><br><br>

        <button type="submit">Valider</button>
    </form>

    <?php
    if (isset($_POST['texte']) && isset($_POST['option'])) {
        $texte = $_POST['texte'];
        $option = $_POST['option'];
        $texteTransforme = appliquerTransformation($texte, $option);
        
        echo "<h3>Résultat :</h3>";
        echo "<p>" . $texteTransforme . "</p>";
    }
    ?>

</body>
</html>
