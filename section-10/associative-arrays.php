<?php

$cities = ["London", "Paris", "Amsterdam", "New York", "Berlin", "Brisbane"];

foreach ($cities as $city) {
    echo $city . "<br>";
}

$students = array("Sam" => 12, "Holly" => 13, "John" => 9);
foreach ($students as $student => $age) {
    echo $student . ' is ' . $age . ' year old';
    echo '<br>';
}
