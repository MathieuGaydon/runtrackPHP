<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Nombre Pair ou Impair</title>
</head>
<body>
    <form method="GET">
        <label for="nombre">Entrez un nombre : </label>
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Valider">
    </form>

    <?php
    // Vérifier si le paramètre "nombre" existe et s'il est un nombre
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        // Vérification que l'entrée est un nombre
        if (is_numeric($nombre)) {
            // Convertir en entier
            $nombre = (int)$nombre;
            if ($nombre % 2 == 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>

</body>
</html>
