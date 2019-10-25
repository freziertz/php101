<?php
declare(strict_types=1);
function addNumbers(int $a, int $b, bool $printSum): int {
$sum = $a + $b;
if ($printSum) {
echo 'The sum is ' . $sum;
}
return $sum;
}
addNumbers(1, 2, true);
addNumbers(1, '2', true); // it fails when strict_types is 1
addNumbers(1, 'something', true); // it always fails