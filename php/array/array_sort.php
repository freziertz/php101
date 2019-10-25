<?php
$properties = [
'firstname' => 'Yahaya',
'lastname' => 'Frezier',
'house' => 'Thratheni'
];

$properties1 = $properties2 = $properties3 = $properties;

sort($properties1);
var_dump($properties1);

echo "\n";

asort($properties3);
var_dump($properties3);

echo "\n";

ksort($properties2);
var_dump($properties2);

echo "\n";


