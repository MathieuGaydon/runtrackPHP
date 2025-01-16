<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$charArray = str_split($str);
$vowelArray = [];

foreach ($charArray as $char) {
    $isVowel = false;
    foreach ($vowels as $vowel) {
        if ($char === $vowel) {
            $isVowel = true;
            break;
        }
    }
    if ($isVowel) {
        $vowelArray[] = $char;
    }
}

echo "Voyelles trouvées : " . implode('', $vowelArray);
?>