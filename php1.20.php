<?php
$string = 31;
if( $string%2 ==0){
	echo" {$string} is a  Evan Number";
}else{
	echo"{$string} is a Odd Number";
}
echo PHP_EOL."<br/>";
if ($string%2==0):

echo"($string) is a evan number";
echo PHP_EOL."<br/>";
echo " some tex";

else:
echo " ($string) is a odd number";
echo PHP_EOL."<br/>";
echo " some tex++";
endif;
echo PHP_EOL."<br/>";
switch ($string%2==0):
	case 0;
	echo "$string is a evan number";
		break;
	default:
	echo " $string is a odd number";
endswitch;
?>