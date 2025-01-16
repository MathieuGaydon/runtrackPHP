<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // Convertir en minuscule pour simplifier la comparaison
    
    if (($char >= 'a' && $char <= 'z')) {
        // Vérifier si le caractère est une voyelle
        $isVoyelle = false;
        for ($j = 0; $j < count($voyelles); $j++) {
            if ($char == $voyelles[$j]) {
                $isVoyelle = true;
                break;
            }
        }
        if ($isVoyelle) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";
?>
