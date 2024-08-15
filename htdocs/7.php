<?php

$persons = array(
    "Paul" => "14.03.1977",
    "Anna" => "22.05.1985",
    "John" => "30.09.1990",
    "Eva" => "01.12.1993"
);


foreach ($persons as $name => $birthdate) {
    $dateParts = explode(".", $birthdate);
    $day = $dateParts[0];
    $month = $dateParts[1];
    $year = $dateParts[2];

    
    $months = array(
        "01" => "Januari",
        "02" => "Februari",
        "03" => "Mars",
        "04" => "April",
        "05" => "Maj",
        "06" => "Juni",
        "07" => "Juli",
        "08" => "Augusti",
        "09" => "September",
        "10" => "Oktober",
        "11" => "November",
        "12" => "December"
    );
    

    $monthName = $months[$month];
    
    
    echo "$name<br>";
    echo "$monthName<br><br>"; 
}
?>
