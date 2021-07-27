<?php

$person= array(' fname'=> 'hello', 'lname'=> 'world');
print_r($person);
//print_r($person);
unset($person['lname']);
print_r($person);
?>
