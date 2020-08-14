<?php

$cities = array('London', 'Paris');

echo "<pre>";
print_r($cities);

// push elements onto the end of array
array_push($cities, 'New York', 'Berlin');
print_r($cities);
// adds elements to the beginning of the array
array_unshift($cities, 'Amsterdam', 'Dublin');
print_r($cities);
