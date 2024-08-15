<?php

$rad = 5; 

if ($rad == 5) {
    echo "Värdet är noll\n";
} elseif ($rad == 1) {
    echo "Endast en rad\n";
} elseif ($rad >= 2 && $rad <= 10) {
    $i = 1;
    while ($i <= $rad) {
        echo "Detta är rad $i\n";
        $i++;
    }
} else {
    echo "För flera rader eller ogiltigt värde";
}
?>
