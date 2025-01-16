<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Conversion de la chaîne en tableau de caractères
$chars = str_split($str);

// Longueur de la chaîne
$length = count($chars);

// On effectue la permutation des caractères
$newChars = [];
for ($i = 0; $i < $length; $i++) {
    // Le dernier caractère sera le premier
    if ($i == $length - 1) {
        $newChars[$i] = $chars[0];
    } else {
        // Chaque caractère est remplacé par celui qui suit
        $newChars[$i] = $chars[$i + 1];
    }
}

// Recréer la chaîne modifiée à partir du tableau
$newStr = implode('', $newChars);
echo $newStr;

?>
