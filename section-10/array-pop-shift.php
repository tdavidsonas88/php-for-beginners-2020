<?php

$cities = ["London", "Paris", "Amsterdam", "New York"];

$lastCity = array_pop($cities);

echo $lastCity;
echo "<br>";
print_r($cities);

echo "<br>";
$firstCity = array_shift($cities);
echo $firstCity;
echo "<br>";
print_r($cities);