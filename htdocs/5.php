<?php

$bilar = "audi,jeep,volkswagen,ford,opel";

$bilArray = explode(",", $bilar);

foreach ($bilArray as $bil) {
    echo $bil . "<br>";
}
?>
