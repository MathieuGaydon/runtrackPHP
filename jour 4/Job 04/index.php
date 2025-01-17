<?php
// Vérifie si des données ont été envoyées via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";
    
    // Parcours des éléments dans $_POST
    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($key) . "</td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
}
?>
<form method="POST" action="">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom"><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    
    <input type="submit" value="Envoyer">
</form>
