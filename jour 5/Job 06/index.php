<?php
function toLeetSpeak($string) {
    // Tableau de correspondances entre les lettres et leurs équivalents en leet speak
    $leet_dict = [
        'a' => '4', 'b' => '8', 'c' => '<', 'e' => '3', 'f' => 'ph', 'g' => '9',
        'h' => '#', 'i' => '1', 'j' => ']', 'k' => '|<', 'l' => '1', 'm' => '/\/\\',
        'n' => '/\\/', 'o' => '0', 'p' => '|D', 'q' => '9', 'r' => '2', 's' => '$',
        't' => '7', 'u' => '|_|', 'v' => '\\/', 'w' => '\\/\\/', 'x' => '><',
        'y' => '`/', 'z' => '2'
    ];

    $result = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $char = strtolower($string[$i]);
        if (isset($leet_dict[$char])) {
            $result .= $leet_dict[$char];
        } else {
            $result .= $string[$i];
        }
    }
    
    return $result;
}
$texte = "Hello World";
echo toLeetSpeak($texte); 
?>