<?php

$cities = ['London', 'Paris', 'New York', 'Dublin', 'Berlin'];
echo $cities[1];
echo "<br>";
$city = array_rand($cities);
echo $cities[$city];