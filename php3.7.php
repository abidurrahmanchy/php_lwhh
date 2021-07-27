<?php
$person = array('fname'=> 'hello','lname' =>'world');
$newperson = $person;
$newperson['lname']= 'pluto';
print_r($person);
print_r($newperson);

//copy by value
//deep copy

//copy by reference
//shallow copy

function printdata( $person){
$person['fname'] .=" changed";
print_r($person);
}
printdata($person);
print_r($person);
?>