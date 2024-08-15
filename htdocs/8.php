<?php

$cities = array(
    "Helsingfors" => 601035,
    "Esbo" => 255121,
    "Tammerfors" => 216586,
    "Vanda" => 204545,
    "Åbo" => 179529
);


asort($cities);

foreach ($cities as $city => $population) {
    echo "$city: $population<br>";
}
?>
