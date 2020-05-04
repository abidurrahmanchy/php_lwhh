<?php
$string = 31;
if( $string%2 ==0){
	echo" {$string} is a  Evan Number";
}else{
	echo"{$string} is a Odd Number";
}
if ($string%2==0):

    echo"($string) is a evan number";
    echo PHP_EOL;
    echo " some tex";
else:
    echo " ($string) is aodd number";
    echo PHP_EOL;
    echo " some tex++";    