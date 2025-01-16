<?php
$str = "Les choses que l'on Possède finissent par nous posséder.";
$reversedStr = '';
$length = 0;
while (isset($str[$length])) {
    $length++;
}

// Inverser la chaîne sans utiliser de fonctions système
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}
// Affichage de la chaîne inversée
echo $reversedStr;
?>