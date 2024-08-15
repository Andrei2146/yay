<?php
$capital = array(
    "Finland" => "Helsingfors",
    "Sverige" => "Stockholm",
    "Japan" => "Tokyo",
    "Tyskland" => "Berlin"
);

foreach ($capital as $country => $city) {
    echo "$city är huvudstaden i $country\n";
}
?>
