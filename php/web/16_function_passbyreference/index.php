<?php
function modify(&$a) {
$a = 3;
}
$a = 2;
modify($a);
var_dump($a); // alwals will be 3



?>