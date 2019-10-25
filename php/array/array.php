<?php
$names = ['Frezier','Ngonyani','Magreth'];
$names[] = 'Navile';

$status = [
'name' => 'James porter', 
'status' => 'dead'
];

$status['age'] = 18;

var_dump($names, $status);

unset($status['status']);

print_r($status);


