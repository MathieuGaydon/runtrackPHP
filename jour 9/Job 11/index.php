<?php
// Création de la connexion
$conn = new PDO("mysql:host=localhost;dbname=jour 08", "root", "");
// Requête SQL pour récupérer la moyenne de la capacité
$sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles;";
$result = $conn->query($sql);

// Vérification si la requête renvoie des résultats
if ($result->rowCount() > 0) { 
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Capacité moyenne</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) { 
        echo "<tr>";
        // Utilisation de l'alias 'capacite_moyenne'
        echo "<td>" . htmlspecialchars($row['capacite_moyenne']) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>
