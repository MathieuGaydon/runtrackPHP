<?php
$i = 0;
while ($i < 101) {
    if ($i >= 0 AND $i<= 20) {
        echo '<em>' .$i .'</em>' ."</br>";
    }  elseif ($i == 42) {
        echo "La Plateforme_" ."</br>";
    }elseif ($i >=25 and $i<= 50 ){
        echo '<u>' .$i . '</u>' ."</br>" ;
    }else {
        echo $i . "</br>";
    }
    $i++; 
}
?>