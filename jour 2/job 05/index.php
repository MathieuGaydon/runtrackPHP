<?php

$nb = 1;
$nb_max = 100;

while ($nb <= $nb_max) {
  if ($nb == 1) {
  echo $nb.' n\'est pas un nombre premier<br>';
  $nb++;
  continue;
  }
$a = 0;
  for ($i=2; $i<$nb; $i++){
  
    if (is_int($nb/$i)){
    $a++;
    echo $nb.' n\'est pas un nombre premier<br>';
    break;
    }
  }
if ($a == 0) echo '<b>'.$nb.' est un nombre premier</b><br>';
$nb++;
}

?>